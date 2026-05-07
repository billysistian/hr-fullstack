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

async function getProfile()
{
    try {

        const response = await api.get('/me');

        const user = response.data;

        document.getElementById('userName').innerText =
            user.name;

        document.getElementById('profileName').innerText =
            user.name;

        document.getElementById('profileEmail').innerText =
            user.email;

    } catch (error) {

        logout();

    }
}

getProfile();

function logout()
{
    localStorage.removeItem('token');

    window.location.href = '/';
}
