<?php  

namespace HOAProjects;

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );

// ISSUE TYPES: Compliance, Issue, Complaint, Inquiry, HOA-issue
// STATUS: New Open, Ongoing, F/U Later, Closed

    $posted_date = get_field('posted_date');
    $type_issue = get_field('type_issue');
    $issueTitle = ($type_issue == 'Compliance')? 'Non-Compliance: ' : $type_issue.': ';
    $property = get_field('lot_no');
    $lot = explode('|',$property);
    $lotno = $lot[0];
    $owner = $lot[1];
    $address = $lot[2];
    $propertyDisplay = ($lotno == 'n/a' || $lotno == '')? esc_html($lotno) : esc_html($lotno).' - '.$address;
    $status = get_field('status');
    $badge = kghoa_translate_status_to_badge($status);
    $send_owner_notice = get_field('send_owner_notice');
    $can_vote = in_array($send_owner_notice, ['Yes','TBD']);
    $vote_msg = (!$can_vote)? ('<td class="text-center fw-semibold text-danger">Voting is closed</td>') : '<td class="text-center fw-semibold text-success">Voting is open</td>';
    if($admin = current_user_can( 'edit_posts' )){
        $can_vote = false;
        $vote_msg = '<td class="text-center fw-semibold text-danger">Voting closed to admin</td>';
    } 
    $date_closed = get_field('date_closed');
    $actionLog = get_field('action_log');
    $buttonLink = ($status == 'Closed')?'inactive-issues':'issues-tracking';
    ?>       
                <div class="page-issue-detail container-md mt-4 mb-5">
                    <a href="/<?php echo $buttonLink; ?>/" class="btn btn-dark" role="button">Back to Issue List</a>
                    <h1 class="mt-2 mb-2 mb-lg-4"><?php echo $issueTitle . esc_html(get_the_title()); ?></h1>
                    <div class="row bg-secondary-subtle p-3 mb-5">
                        <!-- Left side column DETAIL INFO-->
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-5 mb-lg-0">
                                <li><span class="fw-bold">Posted Date:</span> <?php echo esc_html($posted_date); ?></li>
                                <li><span class="fw-bold">Property:</span> <?php echo $propertyDisplay; ?></li>
                                <li><span class="fw-bold">Owner:</span> <?php echo $owner; ?></li>
                                <li><span class="fw-bold">Description</span><br><?php echo esc_html(get_field("description")); ?></li>
                                <li class="mt-3"><span class="fw-bold">Status:</span> <?php echo '<span class="h5">'.kghoa_translate_status_to_badge($status) . '</span>'; ?></li>
                            </ul>
                        </div>

                        <!-- right side column VOTING TABLE -->
                        <div class="col-lg-6">
                            <div class="fw-normal">Vote to send notice to owner</div>
                            <?php echo kghoa_get_proposal_vote_table(get_the_ID(), $vote_msg, $can_vote);
                                if($admin) {
                                    echo kghoa_get_who_voted_list(get_the_ID());
                                }	
                            ?>
                            <div class="fst-italic">NOTE: You may change your vote while voting is open.</div>         
                                                
                        </div>

                    </div><!-- eof ROW -->

<?php 
            if(have_rows('action_log')):
                echo '
                                    <table class="tbl-issue table table-responsive table-sm mt-5">
                                        <thead class="table-secondary border-top border-secondary-subtle">
                                            <tr>
                                                <th colspan="2">Action Log</th>
                                        </thead>
                                        <tbody> 
        ';
                while(have_rows('action_log')):
                    the_row();
                    echo '  
                                            <tr>
                                                <td style="width:105px">' . get_sub_field('log_date') . '</td>
                                                <td>' . get_sub_field('entry') . '</td>                                            </tr>
                    ';        
                endwhile;
                echo ' 
                                        </tbody> 
                                    </table>        
            ';
            endif;

            $images = get_field('photos');
            if( $images ): ?>
                        <div class="mt-5 fw-bold h6">Photo Documentation</div>
                        <div class="d-flex flex-row mb-3">
                            <?php foreach( $images as $image ): ?>
                            <div class="p-2">
                                <a href="<?php echo esc_url($image['url']); ?>" target="_blank">
                                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
            <?php endif; ?>

                </div>






<?php /* echo '
                <div class="page-issue-detail container-md mt-4 mb-5">
                    <a href="/'.$buttonLink.'/" class="btn btn-dark" role="button">Back to Issue List</a>
                    <h1 class="mt-2 mb-2 mb-lg-4">' . esc_html(get_the_title()) . '</h1>
    
                    <div class="row mb-4 pb-4">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div><span class=""><small>Posted ' . esc_html($posted_date) . '</small></span></div>
                                    <h5>' . $badge . '</h5>
                                    <div class="fw-bold mt-3"><small>PROPERTY</small></div>
                                    <div>' . $lot_no . ' - ' . $address . '</div>
                                    <div class="fw-bold mt-3"><small>DESCRIPTION</small></div>
                                    <div>' . esc_html(get_field("description")) . '</div>
                                    ';
            if(have_rows('action_log')):
                echo '
                                    <table class="tbl-issue table table-responsive table-sm mt-4">
                                        <thead class="table-secondary border-top border-secondary-subtle">
                                            <tr>
                                                <th colspan="2">Action Log</th>
                                        </thead>
                                        <tbody> 
        ';
                while(have_rows('action_log')):
                    the_row();
                    echo '  
                                            <tr>
                                                <td style="width:105px">'.get_sub_field('log_date').'</td>
                                                <td>'.get_sub_field('entry').'</td>
                                            </tr>
                    ';        
                endwhile;
                echo ' 
                                        </tbody> 
                                    </table>        
            ';
            endif;


    echo '
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                        ';
    if(!in_array($send_owner_notice, ['N/A', ''])){

        echo '
                            <form id="issue-vote-form" method="post" action="">
                                <input type="hidden" name="project_id" value="'. get_the_ID() .'" />
                                <table id="issue_votes" class="myvote table table-bordered border-dark">
                                    <thead>
                                        '. $vote_msg. '
                                        <th class="text-center">Approve</th>
                                        <th class="text-center">Disapprove</th>
                                        <th class="text-center">Abstain</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>My Vote</th>
        ';
            for($i = 1; $i <= 3; $i++): 
                if($i == 1) { $vID = 'yes'; } 
                elseif($i == 2) { $vID = 'no'; }
                else { $vID = 'abstain';}							
                                            echo '     						
                                            <td class="vote-cell">
                                                <div class="form-check mt-1">
                                                    <input class="form-check-input ml-1 border-dark" type="radio" name="vote" id="vote-'. $vID .'" value="'. $i .'" data-id="9999"'. ($can_vote ? '' : ' disabled readonly') . (($my_vote == $i)? $displayMyVote : '') .' />
                                                </div>
                                            </td>
                                            ';
            endfor;
            echo '
                                        </tr>
                                        <tr>
                                            <th>Total Votes</th>
                                            <td class="vote-cell"><div id="total-yes" class="totalvotes fw-bold text-center">'. $vote_totals[1] .'</div></td>
                                            <td class="vote-cell"><div id="total-no" class="totalvotes fw-bold text-center">'. $vote_totals[2] .'</div></td>
                                            <td class="vote-cell"><div id="total-abstain" class="totalvotes fw-bold text-center">'. $vote_totals[3] .'</div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
            ';
        }
        echo '
                        </div>
                    </div>
                </div>';
*/

get_footer();