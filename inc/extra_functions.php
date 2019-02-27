<?php 
// Menu function
function autheme_falback_menu (){ ?>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="#">Feature 1</a></li>
            <li><a href="#">Feature 2</a></li>
            <li><a href="#">Feature 3</a></li>
            </ul>
        </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
            </ul>
        </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="#">Blog 1</a></li>
            <li><a href="#">Blog 2</a></li>
            <li><a href="#">Blog 3</a></li>
            </ul>
        </li>
        <li class=""><a href="#">Contact</a></li>
        <li><a href="#"><i class="icofont-ui-search"></i></a></li>
    </ul>
<?php 
}

function cExcerpt($number=15, $readmore='Read More'){
    $newnumber = $number + 1;
    $var = explode(' ', strip_tags( get_the_content() ), $newnumber );
    
    if( count($var) >= $newnumber ){
        array_pop($var);  
    }
    
    array_push($var, '<a href="'.get_the_permalink().'" class="button-primary">'.$readmore.'</a>');
    $var = implode(' ', $var);
    
    return $var;
}