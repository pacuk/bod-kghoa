<!DOCTYPE html>
<html lang="en">
<?php 
    $title = 'Issues Tracking';
    include 'head.php';
?>
<body>
    <?php include "header.php" ?>
    <div class="container my-5">
        <h1 class="my-4">Issues Tracking</h1>
        
        <div class="mb-4">
            <form class="row row-cols-md-auto gy-2 gx-3 mb-3">
                <div class="col-12">
                    <select class="form-select select-custom d-inline me-3" aria-label="Custom select">
                        <option selected>Choose record type…</option>
                        <option value="compliance">Compliance</option>
                        <option value="complaint">Complaint</option>
                        <option value="issue">HOA Issue</option>
                    </select>
                </div>
                <div class="col-12">
                    <select class="form-select select-custom d-inline me-3" aria-label="Custom select">
                        <option selected>Filter records…</option>
                        <option value="all">All</option>
                        <option value="open">Open</option>
                        <option value="waiting">Waiting</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>
            </form>
        </div>
    <!-- borrowed from https://wpdatatables.com/table-with-collapsible-rows/ -->
        <table id="tbl-compliance" class="table table-responsive table-hover">
            <thead class="table-light border-top border-secondary-subtle">
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
                <tr data-toggle="collapse" data-target="#lot128" class="accordion-toggle">
                    <td>05-05-2025</td>
                    <td>128</td>
                    <td>4611 Mulberry Road</td>
                    <td>Compliance</td>
                    <td>Playground equipment in front yard</td>
                    <td>05-13-2025</td>
                    <td class="">In progress</td>
                </tr>
                <tr id="lot128" class="collapse">
                    <td>&nbsp;</td>
                    <td colspan="5">
                        <div class="activity-log-item">
                            <div class="log-date">05-06-2025</div>
                            <div class="activity">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.</div>
                        </div>
                        <div class="activity-log-item">
                            <div class="log-date">05-09-2025</div>
                            <div class="activity">Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.</div>
                        </div>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>05-05-2025</td>
                    <td>128</td>
                    <td>4611 Mulberry Road</td>
                    <td>Compliance</td>
                    <td>Playground equipment in front yard</td>
                    <td>05-13-2025</td>
                    <td class="bg-primary text-white">Closed</td>
                </tr>
                <tr>
                    <td>05-05-2025</td>
                    <td>128</td>
                    <td>4611 Mulberry Road</td>
                    <td>Compliance</td>
                    <td>Playground equipment in front yard</td>
                    <td>05-13-2025</td>
                    <td class="bg-warning">F/U Spring</td>
                </tr>
                <tr>
                    <td>05-05-2025</td>
                    <td>128</td>
                    <td>4611 Mulberry Road</td>
                    <td>Compliance</td>
                    <td>Playground equipment in front yard</td>
                    <td>05-13-2025</td>
                    <td class="">In progress</td>
                </tr>
            </tbody>
        </table>














    </div>

<?php include "footer.php" ?>