<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <title>Document</title>
</head>

<style>
    /* Style the form */

    /* Style the input fields */
    input {
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #0d0275;
        outline-color: #0d0275;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        border-color: red;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    /* Make circles that indicate the steps of the form: */


    /* Mark the active step: */
    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: white;
        color: #0d0275;
    }
</style>

<body class="bg-blue-950">
    <header class="bg-blue-950 text-blue-100">
        <nav class="flex justify-around pt-3 pb-3 items-center md:h-24 ">
            <div class="z-50 md:z-0 md:w-1/5">
                <a href=""><img class="h-16" src="image/zetcha-logo.png" alt=""></a>
            </div>
            <div id="hamburger" class="z-50">
                <i class="fa-solid fa-bars-staggered md:hidden fa-2x cursor-pointer"></i>
            </div>
            <div
                class=" menu absolute md:relative inset-0 md:block hidden z-40 bg-blue-950 md:bg-inherit py-24 transition-all duration-200">
                <div
                    class="grid md:flex lg:text-xl text-lg place-items-center  py-10 md:py-0 md:space-y-0 md:space-x-12 text-center md:justify-between">
                    <a href=""
                        class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">Home</a>
                    <a href=""
                        class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">Pricing</a>
                    <a href=""
                        class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">How
                        to use</a>
                    <a href=""
                        class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">About
                        us</a>
                    <a class="rounded-sm text-blue-950 p-2 bg-blue-200 hover:text-white  bordure transition-all hover:bg-inherit ease-in-duration-300"
                        href="">Commencez</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="mt-20">
        <div class=" flex flex-col flex-wrap px-5 py-4 text-white">
            <div class="flex flex-wrap mx-auto">
                <a
                    class=" step inline-flex items-center justify-center w-1/2 py-3 font-medium leading-none tracking-wider text-blue-900 bg-gray-100 border-b-2 sm:px-6 sm:w-auto sm:justify-start">
                    STEP 1
                </a>
                <a
                    class="step inline-flex items-center justify-center w-1/2 py-3 font-medium leading-none tracking-wider border-b-2 border-gray-200 sm:px-6 sm:w-auto sm:justify-start hover:text-gray-900 ">
                    STEP 2
                </a>
                <a
                    class="step inline-flex items-center justify-center w-1/2 py-3 font-medium leading-none tracking-wider border-b-2 border-gray-200 sm:px-6 sm:w-auto sm:justify-start hover:text-gray-900 ">
                    STEP 3
                </a>
            </div>

        </div>
        <!-- form - start -->
        <form id="regForm" action="" class="mx-auto container px-10 mb-4 rounded">
            <div>
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <!-- Container -->

                    <div class="flex justify-center px-6 my-12">
                        <!-- Row -->
                        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                            <!-- Col -->
                            <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-6/12 bg-cover rounded-l-lg"
                                style="background-image: url('image/Rectangle 2.png')"></div>
                            <!-- Col -->
                            <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                                <form class=" bg-white rounded">
                                    <div class="mb-4 md:flex md:justify-between">
                                        <div class="mb-4 md:mr-2 md:mb-0">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                                First Name
                                            </label>
                                            <input class="input" id="firstName" type="text"
                                                placeholder="First Name" />
                                        </div>
                                        <div class="md:ml-2">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                                Last Name
                                            </label>
                                            <input class="input" id="lastName" type="text"
                                                placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                            Email
                                        </label>
                                        <input class="input" id="email" type="email" placeholder="Email" />
                                    </div>
                                    <div class="mb-4 md:flex md:justify-between">
                                        <div class="mb-4 md:mr-2 md:mb-0">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                                Password
                                            </label>
                                            <input class="input" id="password" type="password"
                                                placeholder="******************" />
                                            <p class="text-xs italic text-red-500">Please choose a password.</p>
                                        </div>
                                        <div class="md:ml-2">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                                Confirm Password
                                            </label>
                                            <input class="input" id="c_password" type="password"
                                                placeholder="******************" />
                                        </div>
                                    </div>
                                    <hr class="mb-6 border-t" />

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab">
                    <!-- Container -->

                    <div class="flex justify-center px-6 my-12">
                        <!-- Row -->
                        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                            <!-- Col -->
                            <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-r-none">
                                <form class=" bg-white rounded">
                                    <div class="mb-4 md:flex md:justify-between">
                                        <div class="mb-4 md:mr-2 md:mb-0">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                                First Name
                                            </label>
                                            <input class="input" id="firstName" type="text"
                                                placeholder="First Name" />
                                        </div>
                                        <div class="md:ml-2">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                                Last Name
                                            </label>
                                            <input class="input" id="lastName" type="text"
                                                placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                            Email
                                        </label>
                                        <input class="input" id="email" type="email" placeholder="Email" />
                                    </div>
                                    <div class="mb-4 md:flex md:justify-between">
                                        <div class="mb-4 md:mr-2 md:mb-0">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                                Password
                                            </label>
                                            <input class="input" id="password" type="password"
                                                placeholder="******************" />
                                            <p class="text-xs italic text-red-500">Please choose a password.</p>
                                        </div>
                                        <div class="md:ml-2">
                                            <label class="block mb-2 text-sm font-bold text-gray-700"
                                                for="c_password">
                                                Confirm Password
                                            </label>
                                            <input class="input" id="c_password" type="password"
                                                placeholder="******************" />
                                        </div>
                                    </div>
                                    <hr class="mb-6 border-t" />

                                </form>
                            </div>
                            <!-- Col -->
                            <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-6/12 bg-cover rounded-r-lg"
                                style="background-image: url('image/Rectangle 2.png')"></div>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <!-- Container -->

                    <div class="flex justify-center px-6 my-12">
                        <!-- Row -->
                        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                            <!-- Col -->
                            <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-6/12 bg-cover rounded-l-lg"
                                style="background-image: url('image/Rectangle 2.png')"></div>
                            <!-- Col -->
                            <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                                <form class=" bg-white rounded">
                                    <div class="mb-4 md:flex md:justify-between">
                                        <div class="mb-4 md:mr-2 md:mb-0">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                                First Name
                                            </label>
                                            <input class="input" id="firstName" type="text"
                                                placeholder="First Name" />
                                        </div>
                                        <div class="md:ml-2">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                                Last Name
                                            </label>
                                            <input class="input" id="lastName" type="text"
                                                placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                            Email
                                        </label>
                                        <input class="input" id="email" type="email" placeholder="Email" />
                                    </div>
                                    <div class="mb-4 md:flex md:justify-between">
                                        <div class="mb-4 md:mr-2 md:mb-0">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                                Password
                                            </label>
                                            <input class="input" id="password" type="password"
                                                placeholder="******************" />
                                            <p class="text-xs italic text-red-500">Please choose a password.</p>
                                        </div>
                                        <div class="md:ml-2">
                                            <label class="block mb-2 text-sm font-bold text-gray-700"
                                                for="c_password">
                                                Confirm Password
                                            </label>
                                            <input class="input" id="c_password" type="password"
                                                placeholder="******************" />
                                        </div>
                                    </div>
                                    <hr class="mb-6 border-t" />

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div style="overflow:auto;" class="mt-5 w-96 md:w-3/5 2xl:w-3/4 m-auto mb-20


            text-white">
                <div>
                    <button class="bordure rounded-lg px-1 float-left" type="button" id="prevBtn"
                        onclick="nextPrev(-1)">Previous</button>
                    <button class="bordure rounded-lg px-1 float-right" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
        </form>
        <!-- form - end -->
    </div>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>

    <script>
        let hamburger = document.querySelector('#hamburger');
        let menu = document.querySelector('.menu');
        hamburger.addEventListener("click", () => {
            menu.classList.toggle('hidden');
            menu.style.transition = 'all 2s';

        });
    </script>
</body>

</html>
