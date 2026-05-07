-- =====================================
-- TRIGGER INSERT
-- =====================================

CREATE TRIGGER trg_karyawan_insert
AFTER INSERT ON karyawan
FOR EACH ROW
INSERT INTO tlog (
    tanggal,
    jam,
    keterangan,
    created_at,
    updated_at
)
VALUES (
    CURDATE(),
    CURTIME(),
    CONCAT('INSERT data karyawan ID ', NEW.id, ' Nama ', NEW.nama),
    NOW(),
    NOW()
);

-- =====================================
-- TRIGGER UPDATE
-- =====================================

CREATE TRIGGER trg_karyawan_update
AFTER UPDATE ON karyawan
FOR EACH ROW
INSERT INTO tlog (
    tanggal,
    jam,
    keterangan,
    created_at,
    updated_at
)
VALUES (
    CURDATE(),
    CURTIME(),
    CONCAT('UPDATE data karyawan ID ', NEW.id, ' Nama ', NEW.nama),
    NOW(),
    NOW()
);

-- =====================================
-- TRIGGER DELETE
-- =====================================

CREATE TRIGGER trg_karyawan_delete
AFTER DELETE ON karyawan
FOR EACH ROW
INSERT INTO tlog (
    tanggal,
    jam,
    keterangan,
    created_at,
    updated_at
)
VALUES (
    CURDATE(),
    CURTIME(),
    CONCAT('DELETE data karyawan ID ', OLD.id, ' Nama ', OLD.nama),
    NOW(),
    NOW()
);
