<!DOCTYPE html>
<html lang="en">
<?php 
    $title = 'Dashboard Layout';
    include 'head.php';
?>
<body>
    <?php include "header.php" ?>  

        <div class="container my-5">
                    
            <h1 class="my-4">BOD Dashboard</h1>
            <div class="sectionContainer">
                <h2><a href="property-improvement-requests.php">Property Improvement Requests</a></h2>
                <div class="subSectionContainer">
                    <div class="ps-1">ACTIVE SUBMISSIONS</div>
                    <div class="projectItem table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 100px;">Date Added</th>
                                    <th scope="col" style="width: 190px;">Address</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>05-05-2025</td>
                                    <td>4386 Haverstock Circle</td>
                                    <td>Lot 207 – Lunsford Pool Fencing & Playset</td>
                                    <td>Under Review</td>
                                </tr>
                                <tr>
                                    <td>05-05-2025</td>
                                    <td>5633 Stones Crossing Rd</td>
                                    <td>Lot 208 – Beeson Pool & Landscape</td>
                                    <td>Ratification Needed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>           
            <div class="sectionContainer">
                <h2><a href="board-proposals.php">Proposals</a></h2>
                <div class="sectionContainer">
                    <div>list proposals here</div>
                </div>
            </div>

            <div class="sectionContainer">
                <h2><a href="issues-tracking.php">Issues Tracking</a></h2>
                <div class="sectionContainer">
                    <div>list new issues here</div>
                </div>
            </div>

            <div class="sectionContainer">
                <h2>Board of Directors Contact Information</h2>
                <div class="sectionContainer">
                    <div>list information here</div>
                </div>
            </div>

        </div>

<?php include "footer.php" ?>
