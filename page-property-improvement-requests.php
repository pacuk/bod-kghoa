<?php
/**
 * Template Name: Property Improvement Requests
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );
?>

        <div class="page-property-improvement-requests container-md mt-4 mb-5">

            <div class="row align-items-center mb-4">
                <!-- Title: takes half the width on md+ screens, full width (stacked) on smaller -->
                <div class="col-lg-6">
                    <h1 class="my-4">Property Improvement Requests</h1>
                </div>

                <!-- Search form: same sizing logic; text aligned right on md+; stacks (and shifts to top margin) on smaller -->
                <div class="col-lg-6 text-lg-end mt-3 mt-lg-0">
                    <form id="pir-search" class="d-flex" role="search" method="get" action="">
                        <input 
                        class="form-control me-2" 
                        type="search" 
                        placeholder="Search term…" 
                        aria-label="Search" 
                        name="s" 
                        value="<?php echo get_search_query(); ?>"
                        >
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>

            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-2025" data-bs-toggle="tab" href="#tabpanel-2025" role="tab" aria-controls="tabpanel-2025" aria-selected="true">2025</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-2024" data-bs-toggle="tab" href="#tabpanel-2024" role="tab" aria-controls="tabpanel-2024" aria-selected="false">2024</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-2023" data-bs-toggle="tab" href="#tabpanel-2023" role="tab" aria-controls="tabpanel-2023" aria-selected="false">2023</a>
                </li>
            </ul>
            <div class="tab-content pt-3 mb-5" id="tab-content">
                <div class="tab-pane active" id="tabpanel-2025" role="tabpanel" aria-labelledby="tab-2025">
                            <h5 class="mt-5">ACTIVE REQUESTS</h5>
                            <div class="table-responsive">
                                <table id="property-improvement-requests" class="table table-hover table-sm">                    
                                    <thead class="table-secondary border-top border-secondary-subtle">
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
                                            <td><h6><span class="badge bg-success">Under Review</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
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
                                            <td><h6><span class="badge bg-warning">On Hold</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
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
                                            <td><h6><span class="badge bg-info">Approved</span></h6></td>
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
                                            <td><h6><span class="badge bg-danger">Rejected</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
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
                                            <td><h6><span class="badge bg-dark">Ratification Needed</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>

                            <h5 class="mt-5">INACTIVE REQUESTS</h5>
                            <div class="table-responsive">
                                <table class="table table-hover property-improvement-requests table-sm table-inactive-requests">                    
                                    <thead class="table-secondary border-top border-secondary-subtle">
                                        <tr>
                                            <th scope="col" style="width: 100px;">Date</th>
                                            <th scope="col">Description</th>
                                            <th scope="col" style="width:85px;">
                                                <div class="text-center text-secondary">
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
                                            <td><h6><span class="badge bg-success">Under Review</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
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
                                            <td><h6><span class="badge bg-warning">On Hold</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
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
                                            <td><h6><span class="badge bg-info">Approved</span></h6></td>
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
                                            <td><h6><span class="badge bg-danger">Canceled</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
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
                                            <td><h6><span class="badge bg-dark">Ratification Needed</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                </div>

                <div class="tab-pane" id="tabpanel-2024" role="tabpanel" aria-labelledby="tab-2024">
                    <div class="pt-4 fw-bold">There are 0 active property improvement requests at this time.</div>
                </div>
                
                <div class="tab-pane" id="tabpanel-2023" role="tabpanel" aria-labelledby="tab-2023">
                    <div class="pt-4 fw-bold">There are 0 active property improvement requests at this time.</div>
                </div>
            </div>


            
            
                            
        

                
           


<!--


            <div class="accordion accordion-flush" id="allRequests">

            <!---  YEAR SECTION 
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2025">
                    <button class="accordion-button show" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="true" aria-controls="collapse2025">
                        2025
                    </button>
                    </h2>
                    <div id="collapse2025" class="accordion-collapse collapse show" aria-labelledby="heading2025" data-bs-parent="#allRequests">
                        <div class="accordion-body">
                            <!--<div class="ps-1 fw-bold">There are no active submissions at this time.</div>                  
                            <div class="table-responsive">
                                <table class="table table-hover property-improvement-requests table-sm">                    
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
                                            <td><h6><span class="badge bg-secondary">Under Review</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
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
                                            <td><h6><span class="badge bg-warning">On Hold</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
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
                                            <td><h6><span class="badge bg-success">Approved</span></h6></td>
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
                                            <td><h6><span class="badge bg-danger">Canceled</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
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
                                            <td><h6><span class="badge bg-dark">Ratification Needed</span></h6></td>
                                            <td><a href="project.php" class="stretched-link"></a></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            <!---  YEAR SECTION 
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

            <!---  YEAR SECTION 
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
            </div>-->

        </div>

<?php get_footer();