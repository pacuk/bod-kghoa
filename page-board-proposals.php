<?php
/**
 * Template Name: Board Proposals
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );
?>

        <div class="page-board-proposals container-md mt-4 mb-5">
            <h1 class="my-4">Board Proposals</h1>
                  
            <div class="table-responsive">
                <table class="table table-hover board-proposals table-sm">                    
                    <thead class="table-secondary border-top border-secondary-subtle">
                        <tr class="table-secondary">
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
                            <td>Replace Roundabout Pit Equipment</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <div>0</div>
                                    <div>0</div>
                                    <div>0</div>
                                </div>
                            </td>
                            <td><h6><span class="badge bg-secondary">Under Review</span></h6></td>
                            <td><a href="proposal.php" class="stretched-link"></a></td>
                        </tr>
                        <tr class="position-relative">
                            <td>05/05/2025</td>
                            <td>Bio-dredge Chancery Pond</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <div>7</div>
                                    <div>0</div>
                                    <div>0</div>
                                </div>
                            </td>
                            <td><h6><span class="badge bg-warning">On Hold</span></h6></td>
                            <td><a href="proposal.php" class="stretched-link"></a></td>
                        </tr>
                        <tr class="position-relative">
                            <td>05/05/2025</td>
                            <td>Accept Settlement Offer</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <div>6</div>
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                            </td>
                            <td><h6><span class="badge bg-success">Approved</span></h6></td>
                            <td><a href="proposal.php" class="stretched-link"></a></td>
                        </tr>
                        <tr class="position-relative">
                            <td>06/20/2025</td>
                            <td>Aliquam lorem ante</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <div>1</div>
                                    <div>5</div>
                                    <div>1</div>
                                </div>
                            </td>
                            <td><h6><span class="badge bg-danger">Rejected</span></h6></td>
                            <td><a href="proposal.php" class="stretched-link"></a></td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
   
        </div>
<?php get_footer();