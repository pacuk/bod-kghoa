<!DOCTYPE html>
<html lang="en">
<?php 
    $title = 'Property Improvement Requests';
    include 'head.php';
?>
<body>
    <?php include "header.php" ?>
    
        <div class="container my-5">
            <h1 class="my-4">Property Improvement Requests</h1>

            <div class="accordion accordion-flush" id="allRequests">

            <!---  YEAR SECTION -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2025">
                    <button class="accordion-button show" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="true" aria-controls="collapse2025">
                        2025
                    </button>
                    </h2>
                    <div id="collapse2025" class="accordion-collapse collapse show" aria-labelledby="heading2025" data-bs-parent="#allRequests">
                        <div class="accordion-body">
                            <!--<div class="ps-1 fw-bold">There are no active submissions at this time.</div>-->                  
                            <div class="table-responsive">
                                <table class="table table-hover property-improvement-requests">                    
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 100px;">Date</th>
                                            <th scope="col">Description</th>
                                            <th scope="col" style="width:85px;">
                                                <div class="text-center">
                                                    <div>Votes</div>
                                                    <div class="d-flex justify-content-around">
                                                        <div>Y</div>
                                                        <div>N</div>
                                                        <div>A</div>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="position-relative">
                                            <td>05/05/2025</td>
                                            <td>Lot 207 - Lunsford Pool Fencing & Playset</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <div>0</div>
                                                    <div>0</div>
                                                    <div>0</div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-secondary">Under Review</span></td>
                                            <td><a href="#" class="stretched-link"></a></td>
                                        </tr>
                                        <tr class="position-relative">
                                            <td>05/05/2025</td>
                                            <td>Lot 208 - Beeson Pool & Landscape</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <div>7</div>
                                                    <div>0</div>
                                                    <div>0</div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-warning">On Hold</span></td>
                                            <td><a href="#" class="stretched-link"></a></td>
                                        </tr>
                                        <tr class="position-relative">
                                            <td>05/05/2025</td>
                                            <td>Lot 208 - Beeson Pool & Landscape</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <div>6</div>
                                                    <div>0</div>
                                                    <div>1</div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td><a href="#" class="stretched-link"></a></td>
                                        </tr>
                                        <tr class="position-relative">
                                            <td>05/05/2025</td>
                                            <td>Lot 208 - Beeson Pool & Landscape</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <div>4</div>
                                                    <div>3</div>
                                                    <div>0</div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-danger">Canceled</span></td>
                                            <td><a href="#" class="stretched-link"></a></td>
                                        </tr>
                                        <tr class="position-relative">
                                            <td>05/05/2025</td>
                                            <td>Lot 208 - Beeson Pool & Landscape</td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <div>7</div>
                                                    <div>0</div>
                                                    <div>0</div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-dark">Ratification Needed</span></td>
                                            <td><a href="#" class="stretched-link"></a></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            <!---  YEAR SECTION -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2024">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="false" aria-controls="collapse2024">
                        2024
                    </button>
                    </h2>
                    <div id="collapse2024" class="accordion-collapse collapse" aria-labelledby="heading2024" data-bs-parent="#allRequests">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>

            <!---  YEAR SECTION -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2023">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2023" aria-expanded="false" aria-controls="collapse2023">
                        2023
                    </button>
                    </h2>
                    <div id="collapse2023" class="accordion-collapse collapse" aria-labelledby="heading2023" data-bs-parent="#allRequests">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>

        </div>

<?php include "footer.php" ?>