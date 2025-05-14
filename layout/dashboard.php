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
                    <div class="ps-1 fw-bold">There are no proposals at this time.</div>
                    
                    <!--<div class="table-responsive">
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
                    </div>-->
                </div>
            </div>

            <div class="sectionContainer">
                <h2><a href="issues-tracking.php">Issues Tracking</a></h2>
                <!--<div class="sectionContainer">
                    <div><a href="issues-tracking.php">Click to view the list</a></div>
                </div>-->
            </div>

            <div class="sectionContainer">
                <h2><a href="contact-info.php">Board of Directors Contact Information</a></h2>
                <div class="sectionContainer">
                    <div class="board-members pt-3 mb-5">
                        <div class="board-members-wrap">
                            <table id="bod-contact-info" class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>HOA Email</th>
                                        <th>Personal Email</th>
                                        <th>Term Expires</th>
                                    </tr>
                                </thead>
                                <tbody>
                
                                    <tr>
                                        <td>Terry&nbsp;Cleveland</td>
                                        <td>President</td>
                                        <td>317-409-9234</td>
                                        <td>2921 Nottinghill Way</td>
                                        <td><a href="mailto:president@kensingtongrovehoa.org">president</a></td>
                                        <td><a href="mailto:tcleve13@gmail.com">tcleve13@gmail.com</a></td>
                                        <td>2025</td>
                                    </tr>
                    
                                    <tr>
                                        <td>Brooks&nbsp;Chumley</td>
                                        <td>Vice-President</td>
                                        <td>317-914-8806</td>
                                        <td>5386 Camden Lane</td>
                                        <td><a href="mailto:vp@kensingtongrovehoa.org">vp</a></td>
                                        <td><a href="mailto:chumley9t@gmail.com">chumley9t@gmail.com</a></td>
                                        <td>2025</td>
                                    </tr>
                    
                                    <tr>
                                        <td>Tino&nbsp;Marquez</td>
                                        <td>Secretary</td>
                                        <td>317-513-8116</td>
                                        <td>5517 Camden Lane</td>
                                        <td><a href="mailto:secretary@kensingtongrovehoa.org">secretary</a></td>
                                        <td><a href="mailto:tino.marquez@gmail.com">tino.marquez@gmail.com</a></td>
                                        <td>2026</td>
                                    </tr>
                    
                                    <tr>
                                        <td>Chuck&nbsp;Rivera</td>
                                        <td>Treasurer</td>
                                        <td>317-409-9323</td>
                                        <td>5363 Chancery Blvd</td>
                                        <td><a href="mailto:treasurer@kensingtongrovehoa.org">treasurer</a></td>
                                        <td><a href="mailto:cmrivera0925@gmail.com">cmrivera0925@gmail.com</a></td>
                                        <td>2026</td>
                                    </tr>
                    
                                    <tr>
                                        <td>Mike&nbsp;Medlock</td>
                                        <td>Director</td>
                                        <td>317-908-9709</td>
                                        <td>3083 Coventry Lane</td>
                                        <td><a href="mailto:director1@kensingtongrovehoa.org">director1</a></td>
                                        <td><a href="mailto:boiler67.mm@gmail.com">boiler67.mm@gmail.com</a></td>
                                        <td>2026</td>
                                    </tr>
                    
                                    <tr>
                                        <td>RuthAnn&nbsp;Ansel</td>
                                        <td>Director</td>
                                        <td>317-833-5731</td>
                                        <td>2891 Bloomsbury South</td>
                                        <td><a href="mailto:director2@kensingtongrovehoa.org">director2</a></td>
                                        <td><a href="mailto:annsell5@aol.com">annsell5@aol.com</a></td>
                                        <td>2025</td>
                                    </tr>
                    
                                    <tr>
                                        <td>Andrew&nbsp;Kendall</td>
                                        <td>Director</td>
                                        <td>812-573-3287</td>
                                        <td>5029 Nottinghill Court</td>
                                        <td><a href="mailto:director3@kensingtongrovehoa.org">director3</a></td>
                                        <td><a href="mailto:akendal2@IUHealth.org">akendal2@IUHealth.org</a></td>
                                        <td>2025</td>
                                    </tr>
                    
                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php include "footer.php" ?>
