<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public/backend_assets/images/favicon.png') }}">
    <link href="{{ url('public/backend_assets/css/style.css') }}" rel="stylesheet">

    <!-- Additional styling for layout -->
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .content-container {
            display: flex;
            width: 80%;
        }

        .left-content {
            flex: 1;
            padding: 20px;
        }

        .right-content {
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa; /* Optional: Set a background color for the aside */
        }

        .right-content form {
            max-width: 300px;
            margin: 0 auto;
        }
    </style>
</head>

<body class="h-100">
    <div class="content-container">
        <div class="left-content">
            <h4>Explore Opportunities with Our Scholarship Program</h4>
            <p>Create an account to access exclusive scholarship opportunities and kickstart your educational journey. We believe in supporting your aspirations for a brighter future!</p>
            <p>Awesome 😀. You're about to start something amazing. If you already have an account, you can try signing in.</p>
            <p><a href="#">Terms & Conditions</a></p>
        </div>
        <div class="right-content">
            <div class="authincation-content">
                <div class="auth-form">
                    <h4 class="text-center mb-4">Do you need a scholarships</h4>
                 
                    </form>
                    <div class="new-account mt-3">
                        <p>Apply here <a class="text-primary" href="{{ url('auth/register') }}">Sign up</a></p>
                    </div>              

                    <div class="new-account mt-3">
                        <p>Already have an account? <a class="text-primary" href="{{ url('/admin/') }}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>
