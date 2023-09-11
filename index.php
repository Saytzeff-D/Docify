<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {            
            background-color: #515100 !important;
        }
        .cursor-pointer {
            cursor: pointer;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Docify | Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid py-5">
        <p class="display-3 text-center text-capitalize text-warning">
            Easily create your legal documents
        </p>
        <p class="text-center fs-5 text-warning">
            A very intuitive form will guide you in writing your documents
        </p>
        <div class="row w-100 mx-auto container">
            <p class="text-warning fs-4 my-0">
                Step by Step Guide
            </p>
            <div class="col-md-4 mb-md-0 mb-4 cursor-pointer" onClick="document.location.href='<?php echo $_SERVER['REQUEST_URI'].'templates.php' ?>'">
                <div class="border border-warning text-warning text-center shadow p-5">
                    <p class="display-5 fs-2 fw-bold">
                        1
                    </p>
                    <p class="fs-2 fw-light">
                        Choose a template
                    </p>
                    <p class="fs-4 fw-lighter">
                        You can choose from our 25 available templates
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4">
                <div class="border border-warning text-warning text-center shadow p-5">
                    <p class="display-5 fs-2 fw-bold">
                        2
                    </p>
                    <p class="fs-2 fw-light">
                        Fill out the template
                    </p>
                    <p class="fs-4 fw-lighter">
                        Answer a few questions and your document will be created automatically
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4">
                <div class="border border-warning text-warning text-center shadow p-5">
                    <p class="display-5 fs-2 fw-bold">
                        3
                    </p>
                    <p class="fs-2 fw-light">
                        Proceed to Download
                    </p>
                    <p class="fs-4 fw-lighter">
                        Your document can now be used! Use it for whatever you want.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>