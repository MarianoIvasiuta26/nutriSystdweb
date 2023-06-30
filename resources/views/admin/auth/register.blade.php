<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro</title>

        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    </head>
    <body>

        <style>
            body{
                font-family: 'Open Sans', sans-serif;
            }
            #signUpForm {
                max-width: 500px;
                background-color: #ffffff;
                margin: 40px auto;
                padding: 40px;
                box-shadow: 0px 6px 18px rgb(0 0 0 / 9%);
                border-radius: 12px;
            }
            #signUpForm .form-header {
                gap: 5px;
                text-align: center;
                font-size: .9em;
            }
            #signUpForm .form-header .stepIndicator {
                position: relative;
                flex: 1;
                padding-bottom: 30px;
            }
            #signUpForm .form-header .stepIndicator.active {
                font-weight: 600;
            }
            #signUpForm .form-header .stepIndicator.finish {
                font-weight: 600;
                color: #009688;
            }
            #signUpForm .form-header .stepIndicator::before {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 0;
                transform: translateX(-50%);
                z-index: 9;
                width: 20px;
                height: 20px;
                background-color: #d5efed;
                border-radius: 50%;
                border: 3px solid #ecf5f4;
            }
            #signUpForm .form-header .stepIndicator.active::before {
                background-color: #a7ede8;
                border: 3px solid #d5f9f6;
            }
            #signUpForm .form-header .stepIndicator.finish::before {
                background-color: #009688;
                border: 3px solid #b7e1dd;
            }
            #signUpForm .form-header .stepIndicator::after {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 8px;
                width: 100%;
                height: 3px;
                background-color: #f3f3f3;
            }
            #signUpForm .form-header .stepIndicator.active::after {
                background-color: #a7ede8;
            }
            #signUpForm .form-header .stepIndicator.finish::after {
                background-color: #009688;
            }
            #signUpForm .form-header .stepIndicator:last-child:after {
                display: none;
            }
            #signUpForm input {
                padding: 15px 20px;
                width: 100%;
                font-size: 1em;
                border: 1px solid #e3e3e3;
                border-radius: 5px;
            }
            #signUpForm input:focus {
                border: 1px solid #009688;
                outline: 0;
            }
            #signUpForm input.invalid {
                border: 1px solid #ffaba5;
            }
            #signUpForm .step {
            display: none;
            }
            #signUpForm .form-footer{
                overflow:auto;
                gap: 20px;
            }
            #signUpForm .form-footer button{
                background-color: #009688;
                border: 1px solid #009688 !important;
                color: #ffffff;
                border: none;
                padding: 13px 30px;
                font-size: 1em;
                cursor: pointer;
                border-radius: 5px;
                flex: 1;
                margin-top: 5px;
            }
            #signUpForm .form-footer button:hover {
            opacity: 0.8;
            }

            #signUpForm .form-footer #prevBtn {
                background-color: #fff;
                color: #009688;
            }
        </style>

        <h1 class="text-center fs-4">Form Wizard - Multi Step Form</h1>
        <form id="signUpForm" action="#!">
            @csrf
            <!-- start step indicators -->
            <div class="form-header d-flex mb-4">
                <span class="stepIndicator">Account Setup</span>
                <span class="stepIndicator">Social Profiles</span>
                <span class="stepIndicator">Personal Details</span>
            </div>
            <!-- end step indicators -->

            <!-- step one -->
            <div class="step">
                <p class="text-center mb-4">Create your account</p>
                <div class="mb-3">
                    <input type="email" placeholder="Email Address" oninput="this.className = ''" name="email">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Password" oninput="this.className = ''" name="password">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Confirm Password" oninput="this.className = ''" name="password">
                </div>
            </div>

            <!-- step two -->
            <div class="step">
                <p class="text-center mb-4">Your presence on the social network</p>
                <div class="mb-3">
                    <input type="text" placeholder="Linked In" oninput="this.className = ''" name="linkedin">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Twitter" oninput="this.className = ''" name="twitter">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Facebook" oninput="this.className = ''" name="facebook">
                </div>
            </div>

            <!-- step three -->
            <div class="step">
                <p class="text-center mb-4">We will never sell it</p>
                <div class="mb-3">
                    <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Address" oninput="this.className = ''" name="address">
                </div>
            </div>

            <!-- start previous / next buttons -->
            <div class="form-footer d-flex">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
            <!-- end previous / next buttons -->
        </form>

        <script>
            body{
                font-family: 'Open Sans', sans-serif;
            }
            #signUpForm {
                max-width: 500px;
                background-color: #ffffff;
                margin: 40px auto;
                padding: 40px;
                box-shadow: 0px 6px 18px rgb(0 0 0 / 9%);
                border-radius: 12px;
            }
            #signUpForm .form-header {
                gap: 5px;
                text-align: center;
                font-size: .9em;
            }
            #signUpForm .form-header .stepIndicator {
                position: relative;
                flex: 1;
                padding-bottom: 30px;
            }
            #signUpForm .form-header .stepIndicator.active {
                font-weight: 600;
            }
            #signUpForm .form-header .stepIndicator.finish {
                font-weight: 600;
                color: #009688;
            }
            #signUpForm .form-header .stepIndicator::before {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 0;
                transform: translateX(-50%);
                z-index: 9;
                width: 20px;
                height: 20px;
                background-color: #d5efed;
                border-radius: 50%;
                border: 3px solid #ecf5f4;
            }
            #signUpForm .form-header .stepIndicator.active::before {
                background-color: #a7ede8;
                border: 3px solid #d5f9f6;
            }
            #signUpForm .form-header .stepIndicator.finish::before {
                background-color: #009688;
                border: 3px solid #b7e1dd;
            }
            #signUpForm .form-header .stepIndicator::after {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 8px;
                width: 100%;
                height: 3px;
                background-color: #f3f3f3;
            }
            #signUpForm .form-header .stepIndicator.active::after {
                background-color: #a7ede8;
            }
            #signUpForm .form-header .stepIndicator.finish::after {
                background-color: #009688;
            }
            #signUpForm .form-header .stepIndicator:last-child:after {
                display: none;
            }
            #signUpForm input {
                padding: 15px 20px;
                width: 100%;
                font-size: 1em;
                border: 1px solid #e3e3e3;
                border-radius: 5px;
            }
            #signUpForm input:focus {
                border: 1px solid #009688;
                outline: 0;
            }
            #signUpForm input.invalid {
                border: 1px solid #ffaba5;
            }
            #signUpForm .step {
            display: none;
            }
            #signUpForm .form-footer{
                overflow:auto;
                gap: 20px;
            }
            #signUpForm .form-footer button{
                background-color: #009688;
                border: 1px solid #009688 !important;
                color: #ffffff;
                border: none;
                padding: 13px 30px;
                font-size: 1em;
                cursor: pointer;
                border-radius: 5px;
                flex: 1;
                margin-top: 5px;
            }
            #signUpForm .form-footer button:hover {
            opacity: 0.8;
            }

            #signUpForm .form-footer #prevBtn {
                background-color: #fff;
                color: #009688;
            }
        </script>
    </body>
</html>
