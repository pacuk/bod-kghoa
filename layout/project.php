<!DOCTYPE html>
<html lang="en">
<?php 
    $title = 'Project Review';
    include 'head.php';
?>
<body>

<?php include "header.php" ?>
    
        <div class="container my-5">
            <div class="row justify-content-center border-bottom border-top border-bod-blue my-5">
                <div class="col col-sm-6 col-md-4 text-start"><a href="">&laquo;&nbsp;Prev project</a></div>
                <div class="col col-sm-6 col-md-4 text-end"><a href="">Next project&nbsp;&raquo;</a></div>
            </div>
            
            <div class="badge text-bg-success">Under Review</div>
            <h1 class="mb-5">Lot 212 - Casper Privacy Fence</h1>
            <div class="my-5">
                <div class="row">
                    <div class="col-xl-6">
                        <table class="projectReview">
                            <tbody>
                                <tr>
                                    <th>Posted:</th>
                                    <td>12/13/2025</td>
                                </tr>
                                <tr>
                                    <th>Owner:</th>
                                    <td>John & Martha Brown</td>
                                </tr>
                                <tr>
                                    <th>Address:</th>
                                    <td>5643 Coventry Lane</td>
                                </tr>
                                <tr class="decisionData">
                                    <th>Decision:</th>
                                    <td>Approved - Meeting vote decision</td>
                                </tr>
                                <tr>
                                    <th>Signed Off:</th>
                                    <td>12/16/2025</td>
                                </tr>
                                <tr>
                                    <th>Case Closed:</th>
                                    <td>12/18/2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xl-6">
                        <table id="project_votes" class="table table-bordered border-dark" style="max-width: 525px;">
                            <thead>
                                <tr>
                                    <td class="text-center"><span class="text-danger">Voting is closed</span></td>
                                    <th class="bg-secondary-subtle fw-semibold text-center">Approve</th>
                                    <th class="bg-secondary-subtle fw-semibold text-center">Disapprove</th>
                                    <th class="bg-secondary-subtle fw-semibold text-center">Abstain</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="bg-secondary-subtle fw-semibold">My Vote</th>
                                    <td class="vote-cell"><div class="form-check d-flex justify-content-center"><input class="form-check-input" type="radio" name="vote" id="vote-yes" value="1" checked></div></td>
                                    <td class="vote-cell"><div class="form-check d-flex justify-content-center"><input class="form-check-input" type="radio" name="vote" id="vote-no" value="2"></div></td>
                                    <td class="vote-cell"><div class="form-check d-flex justify-content-center"><input class="form-check-input" type="radio" name="vote" id="vote-abstain" value="3"></div></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary-subtle fw-semibold">Total eVotes</th>
                                    <td class="vote-cell"><div id="total-yes" class="totalvotes fw-bold text-center">2</div></td>
                                    <td class="vote-cell"><div id="total-no" class="totalvotes fw-bold text-center">2</div></td>
                                    <td class="vote-cell"><div id="total-abstain" class="totalvotes fw-bold text-center">0</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            


        
        
        
        </div>
          
<?php include "footer.php" ?>