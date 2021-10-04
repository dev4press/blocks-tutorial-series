/*
 Edit function for the block.
 */
import {__} from '@wordpress/i18n';
import {InnerBlocks, useBlockProps} from "@wordpress/block-editor";

/*
 Include SASS file with editor styling only for the block.
 This will be compiled into file loaded only inside the editor.
 If you don't have dedicated styling file for the block, remove this.
 */
import './editor.scss';

export default function Edit({attributes, setAttributes}) {
    const highlightTemplate = [
        ['core/paragraph', {className: 'millan-dev-highlight-title', placeholder: __('Enter the Title...', 'alpha-blocks')}],
        ['core/paragraph', {placeholder: __('Enter the Content...', 'alpha-blocks')}]
    ];

    return (
        <div {...useBlockProps()}>
            <div className="millan-dev-highlight-inner">
                <InnerBlocks
                    template={highlightTemplate}
                />
            </div>
        </div>
    );
}
