@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="page-header d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold mb-0">Data Karyawan</h3>

    <div>
        <button class="btn btn-success me-2" onclick="exportPdf()">Export PDF</button>
    </div>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <form id="formKaryawan">
            <input type="hidden" id="id">

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" id="nama" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Gaji</label>
                    <input type="number" id="gaji" class="form-control">
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="saveData()">Simpan</button>
        </form>
    </div>
</div>

<div class="card border-0 shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table id="karyawanTable" class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Gaji</th>
                        <th width="200">Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>

async function getData() {
    try {
        const response = await api.get('/karyawan');
        let rows = '';

        response.data.forEach(item => {
            rows += `
                <tr>
                    <td>${item.id}</td>
                    <td>${item.nama}</td>
                    <td>${item.tgl_lahir}</td>
                    <td>${item.gaji}</td>
                    <td>
                        <button class="btn btn-warning btn-sm me-2" onclick="editData(${item.id}, '${item.nama}', '${item.tgl_lahir}', ${item.gaji})">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(${item.id})">Delete</button>
                    </td>
                </tr>
            `;
        });

        if ($.fn.dataTable.isDataTable('#karyawanTable')) {
            $('#karyawanTable').DataTable().destroy();
        }

        document.getElementById('tableBody').innerHTML = rows;
        $('#karyawanTable').DataTable({
            responsive: true,
            pageLength: 10,
            lengthChange: false,
            columnDefs: [{ orderable: false, targets: 4 }]
        });
    } catch (error) {
        if (error.response && error.response.status === 401) {
            alert('Token expired, silahkan login kembali');
            logout();
        }
    }
}

async function saveData() {
    const id = document.getElementById('id').value;
    const data = {
        nama: document.getElementById('nama').value,
        tgl_lahir: document.getElementById('tgl_lahir').value,
        gaji: document.getElementById('gaji').value
    };

    try {
        if (id) {
            await api.put(`/karyawan/${id}`, data);
            alert('Data berhasil diupdate');
        } else {
            await api.post('/karyawan', data);
            alert('Data berhasil ditambahkan');
        }
        resetForm();
        getData();
    } catch (error) {
        alert('Terjadi kesalahan');
    }
}

function editData(id, nama, tgl_lahir, gaji) {
    document.getElementById('id').value = id;
    document.getElementById('nama').value = nama;
    document.getElementById('tgl_lahir').value = tgl_lahir;
    document.getElementById('gaji').value = gaji;
}

async function deleteData(id) {
    if (!confirm('Yakin ingin menghapus data?')) {
        return;
    }

    try {
        await api.delete(`/karyawan/${id}`);
        alert('Data berhasil dihapus');
        getData();
    } catch (error) {
        alert('Gagal menghapus data');
    }
}

function resetForm() {
    document.getElementById('id').value = '';
    document.getElementById('nama').value = '';
    document.getElementById('tgl_lahir').value = '';
    document.getElementById('gaji').value = '';
}

function logout() {
    localStorage.removeItem('token');
    window.location.href = '/';
}

function exportPdf() {
    window.open('/api/report/pdf?token=' + token, '_blank');
}

getData();
</script>

@endpush
