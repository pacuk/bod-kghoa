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
                    <!--<div class="ps-1 fw-bold">There are no active submissions at this time.</div>-->
                    
                    <div class="table-responsive">
                                <table class="table table-hover property-improvement-requests">                     
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 100px;">Date</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="position-relative">
                                    <td>05/05/2025</td>
                                    <td>Lot 207 - Lunsford Pool Fencing & Playset</td>
                                    <td>Under Review</td>
                                    <td><a href="project.php" class="stretched-link"></a></td>
                                </tr>
                                <tr class="position-relative">
                                    <td>05/05/2025</td>
                                    <td>Lot 208 - Beeson Pool & Landscape</td>
                                    <td>Ratification Needed</td>
                                    <td><a href="project.php" class="stretched-link"></a></td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>           
            <div class="sectionContainer">
                <h2><a href="board-proposals.php">Board Proposals</a></h2>
                <div class="subSectionContainer">
                    <div class="ps-1">ACTIVE PROPOSALS</div>
                    <!--<div class="ps-1 fw-bold">There are no proposals at this time.</div>-->
                    
                    <div class="table-responsive">
                                <table class="table table-hover board-proposals">                     
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 100px;">Date</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="position-relative">
                                    <td>05/05/2025</td>
                                    <td>Roundabout Pit Equipment Replacement</td>
                                    <td>Under Review</td>
                                    <td><a href="proposal.php" class="stretched-link"></a></td>
                                </tr>
                                <tr class="position-relative">
                                    <td>05/05/2025</td>
                                    <td>Bio-dredge Chancery Pond</td>
                                    <td>Ratification Needed</td>
                                    <td><a href="proposal.php" class="stretched-link"></a></td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
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
