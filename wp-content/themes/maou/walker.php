<?php /**
 * Create HTML list of nav menu items.
 * Replacement for the native Walker, using the description.
 *
 * @see    http://wordpress.stackexchange.com/q/14037/
 * @author toscho, http://toscho.de
 */
class Description_Walker extends Walker_Nav_Menu
{




    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

        if(isset($args['children'])) {
            $output .= '<a href="' . $element->url . '"  class="subMenuA" ><div>' . $element->title . '</div></a>';
        } else {
            $output .= '<div class="subMenuButton"><a href="' . $element->url . '">' . $element->title . '</a></div>';
        }




        $this->child_count = ( isset($children_elements[$element->ID]) ) ? count($children_elements[$element->ID]) : 0;


        if($this->child_count) {

            $output .= '<div class="subMenu">';

            foreach ($children_elements[$element->ID] as $key => $child) {
                $args['children'] = 1;
                $this->display_element( $child, $children_elements, $max_depth, $depth, $args, $output );
            }

            $output .= '</div>';

        }

    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    }
}