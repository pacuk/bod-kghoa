<?php
/**
 * Template Name: Issues Tracking
 */

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );
?>

        <div class="page-issues-tracking container-md mt-4 mb-5">
            <h1 class="mt-4 mb-0">Issues Tracking</h1>
            <div class="fs-6 fw-normal fst-italic mb-5">Click row to reveal action</div>
            
            <div class="mb-4">
                <form class="row row-cols-md-auto gy-2 gx-3 mb-3">
                <div class="col-12">
                        <select class="form-select select-custom d-inline" aria-label="Custom select">
                            <option selected>Select year…</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <select class="form-select select-custom d-inline" aria-label="Custom select">
                            <option selected>Select record type…</option>
                            <option value="compliance">Compliance</option>
                            <option value="complaint">Complaint</option>
                            <option value="inquiry">Inquiry</option>
                            <option value="issue">HOA Issue</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <select class="form-select select-custom d-inline" aria-label="Custom select">
                            <option selected>Filter records…</option>
                            <option value="all">All</option>
                            <option value="open">Open New</option>
                            <option value="ongoing">Ongoing</option>
                            <option value="followup">F/U later</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                </form>
            </div>

            <table  id="tbl-compliance" class="table table-responsive table-hover table-sm">
                <thead class="table-secondary border-top border-secondary-subtle">
                    <tr>
                        <th>Posted</th>
                        <th>Lot No.</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Date Last Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="clickable" data-bs-toggle="collapse" data-bs-target="#detailRow1" aria-expanded="false" aria-controls="detailRow1">
                        <td>05-05-2025</td>
                        <td>128</td>
                        <td>4611 Mulberry Road</td>
                        <td>Compliance</td>
                        <td>Playground equipment in front yard</td>
                        <td>05-13-2025</td>
                        <td><h6><span class="badge text-bg-success">In progress</span></h6></td>
                    </tr>
                    <tr id="detailRow1" class="collapse">
                        <td class="action-data"><div class="fw-bold">Action log:</div></td>
                        <td colspan="5" class="action-data">                        
                            <table class="table table-borderless">
                                <tr>
                                    <td>06-12-2025</td>
                                    <td>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</td>
                                </tr>
                                <tr>
                                    <td>06-12-2025</td>
                                    <td>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</td>
                                </tr>
                                <tr>
                                    <td>06-12-2025</td>
                                    <td>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</td>
                                </tr>
                            </table>
                        </td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr class="clickable" data-bs-toggle="collapse" data-bs-target="#detailRow2" aria-expanded="false" aria-controls="detailRow2">
                        <td>05-05-2025</td>
                        <td>128</td>
                        <td>4611 Mulberry Road</td>
                        <td>Compliance</td>
                        <td>Playground equipment in front yard</td>
                        <td>05-13-2025</td>
                        <td><h6><span class="badge text-bg-primary">Closed</span></h6></td>
                    </tr>
                    <tr id="detailRow2" class="collapse">
                        <td class="action-data"><div class="fw-bold">Action log:</div></td>
                        <td colspan="5" class="action-data">                        
                            <table class="table table-borderless">
                                <tr>
                                    <td>No data found.</td>
                                </tr>
                            </table>
                        </td>
                        <td>&nbsp;</td>
                    
                    </tr>

                    <tr class="clickable" data-bs-toggle="collapse" data-bs-target="#detailRow3" aria-expanded="false" aria-controls="detailRow3">
                        <td>05-05-2025</td>
                        <td>128</td>
                        <td>4611 Mulberry Road</td>
                        <td>Compliance</td>
                        <td>Playground equipment in front yard</td>
                        <td>05-13-2025</td>
                        <td><h6><span class="badge text-bg-warning">F/U Spring</span></h6></td>
                    </tr>
                    <tr id="detailRow3" class="collapse">
                        <td class="action-data"><div class="fw-bold">Action log:</div></td>
                        <td colspan="5" class="action-data">                        
                            <table class="table table-borderless">
                                <tr>
                                    <td>06-12-2025</td>
                                    <td>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</td>
                                </tr>
                                <tr>
                                    <td>06-12-2025</td>
                                    <td>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</td>
                                </tr>
                                <tr>
                                    <td>06-12-2025</td>
                                    <td>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</td>
                                </tr>
                            </table>
                        </td>
                        <td>&nbsp;</td>
                    </tr>

                </tbody>
            </table>
        </div>

<?php get_footer();