<?php  

namespace HOAProjects;

if ( ! is_user_logged_in() ) {
    wp_safe_redirect( home_url() );
    exit;
}

get_header( 'bod' );

    $proposal_date = get_field('proposal_date');
    $status = get_field('status');
    $badge = kghoa_translate_status_to_badge($status);
    $can_vote = in_array($status, ['Under Review']);
    $vote_msg = (!$can_vote)? ('<td class="text-center fw-semibold text-danger">Voting is closed</td>') : '<td class="text-center fw-semibold text-success">Voting is open</td>';
    if($admin = current_user_can( 'edit_posts' )){
        $can_vote = false;
        $vote_msg = '<td class="text-center fw-semibold text-danger">Voting closed to admin</td>';
    } 

    if(null !== (get_field('proposed_timeline'))){
        $proposed_timeline = '
                                    <div class="fw-bold mt-2"><small>PROPOSED TIMELINE</small></div>
                                    <div>' . esc_html(get_field("proposed_timeline")) . '</div>
        ';
    } else {
        $proposed_timeline = '';
    }

    if(null !== (get_field('recommendation'))){
        $recommendation = '
                                    <div class="fw-bold mt-2"><small>RECOMMENDATION</small></div>
                                    <div>' . esc_html(get_field("recommendation")) . '</div>
        ';
    } else {
        $recommendation = '';
    }

    if(null !== (get_field('final_decision'))){
        $final_decision = '
                                    <div class="fw-bold mt-2"><small>FINAL BOARD DECISION</small></div>
                                    <div>' . esc_html(get_field("final_decision")) . '</div>        
        ';
    } else {
        $final_decision = '';
    }         
    echo '
                <div class="page-proposal-detail container-md mt-4 mb-5">
                    <a href="/bod-proposals/" class="btn btn-dark" role="button">Back to Proposal List</a>
                    <h1 class="mt-2 mb-2 mb-lg-4">' . esc_html(get_the_title()) . '</h1>
    
                    <div class="row mb-4 pb-4">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div><span class=""><small>Posted ' . esc_html($proposal_date) . '</small></span></div>
                                    <h5>' . $badge . '</h5>
                                    <div class="fw-bold mt-3"><small>DESCRIPTION</small></div>
                                    <div>' . esc_html(get_field("description")) . '</div>
                    ';

        if(have_rows('vendors')):
            echo '<div class="fw-bold mt-2"><small>VENDORS</small></div>';
            while(have_rows('vendors')): the_row();
                $vendor = get_sub_field('vendor');
                $quote = get_sub_field('quote');

                echo '
                                    <ul>
                                        <li><span class="fw-bold">'.$vendor.'</span><br>
                                            <div>Quote: '.$quote.'</div>
                            ';

                if(have_rows('documentation')){
                    echo '
                                            <div>Documentation:</div>
                                ';
                    while(have_rows('documentation')){
                        the_row();
                        $file = get_sub_field('document');
                        echo '
                                            <div><a href="'. $file['url'] .'" target="_blank">'. $file['filename'] .'</a></div>
                                    ';
                    }
                }
                echo '
                                        </li>
                                    </ul>
                            ';
            endwhile;
        else:
            echo '<div>No vendor information recorded.</div>';
        endif;

        echo $recommendation.$proposed_timeline.$final_decision.'
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-5">
            ';
        echo kghoa_get_proposal_vote_table(get_the_ID(), $vote_msg, $can_vote);
				if($admin) {
					echo kghoa_get_who_voted_list(get_the_ID());
				}	
		echo '	
			                <div class="fst-italic">NOTE: You may change your vote while voting is open.</div>
                            
                        </div>
                    </div>
                </div>';

get_footer();