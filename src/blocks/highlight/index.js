/*
 Main file for a block, using import directives to load various core libraries.
 */
import {__} from '@wordpress/i18n';
import {registerBlockType} from '@wordpress/blocks';

/*
 Include SASS file with styling for the block.
 If you don't have dedicated styling file for the block, remove this.
 */
import './style.scss';

/*
 * Import functions for Edit and Save, and Icons constant with SVG icons.
 */
import Edit from './edit';
import Save from './save';
import Icons from "../../helpers/icons";

/*
 * Register the new block
 */
registerBlockType('millan-dev/highlight', {
    apiVersion: 2,
    name: 'millan-dev/highlight',
    title: __('Highlight', 'blocks-tutorial-series'),
    description: __('Highlight some content', 'blocks-tutorial-series'),
    category: 'millan',
    icon: Icons.highlight,
    supports: {
        color: {
            gradients: true
        }
    },
    attributes: {},
    edit: Edit,
    save: Save,
});
