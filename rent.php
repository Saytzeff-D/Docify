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
        .doc-page {
            
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Docify | Rental Agreement</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>        
</head>
<body>
    <?php
        $city = 'Ogbomoso'
    ?>
    <div class="container py-5">
        <div>
            <p class="text-warning fs-4">Room Rental Agreement</p>
        </div>        
        <div class="w-100 mt-3">
            <div class="progress" style="height: 20px">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning fw-bold" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%">75%</div>
            </div>
        </div>      
        <div class="row mx-auto w-100">
            <div class="col-md-4 py-2">
                <div class="bg-warning p-4">
                    <p class="text-dark fs-5 fw-bold">
                        You are from which city?
                    </p>
                    <input onInput="clickMe(event)" class="form-control bg-warning" /> 
                    <div class="pt-3">
                        <button class="btn btn-dark fw-bold" >Prev</button>
                        <button class="btn btn-dark fw-bold" >Next</button>
                    </div>                                       
                </div>
            </div>
            <div class="col-md-8 py-2 doc-page">
                <div class="bg-warning overflow-auto p-4">
                    <p>ROOM RENTAL AGREEMENT</p>

                    <p>Parties</p>

                    <p>This Room Rental Agreement ("Agreement") is entered into in <i><?php echo $city ?></i>, on [Date], between:</p>

                    <p>LANDLORD (Property Owner):</p>
                    <p>Landlord's Name: [Landlord's Name]</p>
                    <p>Landlord's Address: [Landlord's Address]</p>
                    <p>Landlord's Tax Identification Number: [Landlord's NIF/CIF]</p>

                    <p>TENANT (Renter):</p>
                    <p>Tenant's Name: [Tenant's Name]</p>
                    <p>Tenant's Address: [Tenant's Address]</p>
                    <p>Tenant's Tax Identification Number: [Tenant's NIF/CIF]</p>

                    <p>Purpose of the Agreement</p>

                    <p>The Landlord leases a room in the dwelling located at [Dwelling Address] ("Dwelling"), under the following conditions:</p>

                    <p>Duration of the Lease</p>

                    <p>The lease term shall be [Number of months/years] commencing on [Start Date] and ending on [End Date].</p>

                    <p>Rent</p>

                    <p>The Tenant agrees to pay a monthly rent of [Amount] euros (€), to be paid within the first [Day] days of each month. The agreed payment method is [Payment Method].</p>

                    <p>Security Deposit</p>

                    <p>The Tenant shall provide the Landlord with a security deposit equivalent to [Amount] euros (€) at the time of signing this agreement. The deposit will be refunded at the end of the contract, deducting costs for damages or unpaid rent.</p>

                    <p>Use of Common Areas</p>

                    <p>The Tenant shall have the right to use the common areas of the Dwelling, including [Specify available common areas such as kitchen, bathroom, living room, etc.].</p>

                    <p>Landlord's Obligations</p>

                    <p>The Landlord agrees to maintain the Dwelling in suitable conditions for habitation and to make necessary repairs to ensure proper functioning of facilities and services.</p>

                    <p>Tenant's Obligations</p>

                    <p>The Tenant agrees to use the room and common areas of the Dwelling reasonably and respectfully of the rights of other tenants or individuals living in the Dwelling.</p>

                    <p>Termination of the Agreement</p>

                    <p>Either party may terminate this Agreement by providing written notice to the other party with [Number of days] days' notice.</p>

                    <p>Applicable Law and Jurisdiction</p>

                    <p>This Agreement shall be governed and interpreted in accordance with the laws of [Applicable Jurisdiction].</p>

                    <p>Any dispute related to this Agreement shall be subject to the exclusive jurisdiction of the courts of [City or Jurisdiction].</p>

                    <p>Signatures of the Parties</p>

                    <p>The parties have executed this Room Rental Agreement on the date mentioned above.</p>

                    <p>By the Landlord:</p>

                    <p>Signature: _______________________________</p>
                    <p>Printed Name: __________________________</p>
                    <p>Date: _______________________________</p>

                    <p>By the Tenant:</p>

                    <p>Signature: _______________________________</p>
                    <p>Printed Name: __________________________</p>
                    <p>Date: _______________________________</p>
                </div>
            </div>
        </div>  
    </div>

    <script type="text/javascript" >
        const clickMe = (e)=>{
            console.log(e.target.value)
        }
    </script>
</body>
</html>