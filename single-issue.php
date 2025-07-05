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
    $status = get_field('status');
    $badge = kghoa_translate_status_to_badge($status);
    $send_owner_notice = get_field('send_owner_notice');
    $can_vote = in_array($send_owner_notice, ['Yes','TBD']);
    $vote_msg = (!$can_vote)? ('<td class="text-center fw-semibold text-danger">Voting is closed</td>') : '<td class="text-center fw-semibold text-success">Voting is open</td>';
    if($admin = current_user_can( 'edit_posts' )){
        $can_vote = false;
        $vote_msg = '<td class="text-center fw-semibold text-danger">Voting closed to admin</td>';
    } 
    $my_vote = kghoa_get_board_member_project_vote(get_the_ID());
    $displayMyVote = ($my_vote)?' checked':'';
    $vote_totals = kghoa_get_vote_totals(get_the_ID());
    $date_closed = get_field('date_closed');
    $actionLog = get_field('action_log');
    $buttonLink = ($status == 'Closed')?'inactive-issues':'issues-tracking';
           
    echo '
                <div class="page-issue-detail container-md mt-4 mb-5">
                    <a href="/'.$buttonLink.'/" class="btn btn-dark" role="button">Back to Issue List</a>
                    <h1 class="mt-2 mb-2 mb-lg-4">' . esc_html(get_the_title()) . '</h1>
    
                    <div class="row mb-4 pb-4">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div><span class=""><small>Posted ' . esc_html($posted_date) . '</small></span></div>
                                    <h5>' . $badge . '</h5>
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
                                <input type="hidden" name="issue_id" value="'. get_the_ID() .'" />
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

get_footer();