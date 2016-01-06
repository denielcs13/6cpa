<?php

namespace SixCpa\Extras;

class Custom_Walker_Nav extends \Walker_Nav_Menu {

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if($this->has_children) {
            $before = '<input type="checkbox" id="cb_' . $item->ID . '">'
                . '<label class="sub-menu-toggle" for="cb_'
                . $item->ID . '"><span class="fa fa-chevron-down"></span></label>';
        }
        $output .= $before . parent::start_el($output, $item, $depth, $args, $id);
    }

}