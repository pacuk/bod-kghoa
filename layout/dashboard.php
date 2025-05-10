<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">  
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php include "header.php" ?>  

    <div class="container my-5">
        <h1 class="my-4">BOD Dashboard</h1>

        <h2>Properties</h2>
            <div class="sectionContainer">
                <h3>Property Improvement Requests</h3>
                <div class="subSectionContainer">
                    <div class="">RECENTLY ADDED!</div>
                    <div class="projectItem">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">Date Added</th>
                                    <th style="width: 10%;">Lot No</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>05-05-2025</td>
                                    <td>299</td>
                                    <td>4386 Coventry Lane</td>
                                    <td>New roof</td>
                                    <td>On hold</td>
                                </tr>
                                <tr>
                                    <td>05-05-2025</td>
                                    <td>299</td>
                                    <td>4386 Coventry Lane</td>
                                    <td>New roof</td>
                                    <td>On hold</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h3>Property Owners</h3>
            </div>           

        <h2>Board Proposals</h2>
            <div class="sectionContainer">
                <div>list proposals here</div>
            </div>

        <h2>Issues Tracking</h2>
            <div class="sectionContainer">
                <div>list new issues here</div>
            </div>

        <h2>Board of Directors Contact Information</h2>
            <div class="sectionContainer">
                <div>list information here</div>
            </div>



    </div>

<?php include "footer.php" ?>
