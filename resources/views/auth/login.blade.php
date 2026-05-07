<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-4">

            <div class="card shadow border-0">

                <div class="card-body p-4">

                    <h3 class="text-center mb-4">
                        Login
                    </h3>

                    <div class="mb-3">
                        <label>Email</label>

                        <input
                            type="email"
                            id="email"
                            class="form-control"
                            value="admin@gmail.com"
                        >
                    </div>

                    <div class="mb-3">
                        <label>Password</label>

                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            value="pass123"
                        >
                    </div>

                    <button
                        class="btn btn-primary w-100"
                        onclick="login()"
                    >
                        Login
                    </button>

                    <div
                        id="message"
                        class="mt-3 text-danger text-center"
                    ></div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>

async function login()
{
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    try {

        const response = await axios.post('/api/login', {
            email,
            password
        });

        localStorage.setItem(
            'token',
            response.data.access_token
        );

        window.location.href = '/dashboard';

    } catch (error) {

        document.getElementById('message').innerHTML =
            'Email atau password salah';

    }
}

</script>

</body>
</html>
