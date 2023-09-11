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
    <title>Docify | Templates</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>        
</head>
<body>
    <div class="container py-5">
        <p class="text-center text-warning fs-1">
            Choose a Template            
        </p>
        <div class="container">
            <div class="col-md-3">
                <div class="border border-warning p-3 shadow-lg">
                    <p class="text-warning text-center fs-4" >
                        Room Rental Agreement
                    </p>
                    <div class="d-flex justify-content-center pt-4">
                        <button onClick="document.location.href='<?php echo dirname($_SERVER['REQUEST_URI']).'/rent.php' ?>'" class="btn btn-warning fw-bold btn-lg rounded-0">
                            Fill Template
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>