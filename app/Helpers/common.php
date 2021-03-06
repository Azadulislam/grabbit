<?php
function showStatus($status)
{
    switch ($status->nickname) {
        case 'active':
            echo '<span class="badge badge-primary px-2">' . $status->name . '</span>';
            break;
        case 'inactive':
            echo '<span class="badge badge-danger px-2">' . $status->name . '</span>';
            break;
        case 'pending':
            echo '<span class="badge badge-warning px-2">' . $status->name . '</span>';
            break;
        case 'approved':
            echo '<span class="badge badge-success px-2">' . $status->name . '</span>';
            break;
        case 'rejected':
            echo '<span class="badge badge-danger px-2">' . $status->name . '</span>';
            break;
        case 'progressing':
            echo '<span class="badge badge-success px-2">' . $status->name . '</span>';
            break;
        case 'created':
            echo '<span class="badge badge-primary px-2">' . $status->name . '</span>';
            break;
        case 'completed':
            echo '<span class="badge badge-success px-2">' . $status->name . '</span>';
            break;
        case 'deactivated':
            echo '<span class="badge badge-warning px-2">' . $status->name . '</span>';
            break;
        default:
            echo '<span class="badge badge-warning px-2">No status found</span>';
    }
}

function status($status)
{
    echo '<span class="badge badge-success px-2">' . $status . '</span>';

}
function showStars($rating)
{
    $unrated = 5-$rating;
    for($i = 0; $i < $rating; $i++){
        echo '<i class="fas fa-star"></i>';
    }
    for($i = 0; $i < $unrated; $i++){
        echo '<i class="far fa-star"></i>';
    }
}

function price($price){
    echo $price. " SGD";
}
