const token = localStorage.getItem('token');

if (!token) {
    window.location.href = '/';
}

const api = axios.create({
    baseURL: '/api',
    headers: {
        Authorization: `Bearer ${token}`
    }
});

function logout()
{
    localStorage.removeItem('token');

    window.location.href = '/';
}
