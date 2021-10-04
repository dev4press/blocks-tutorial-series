/*
 Edit function for the block.
 */
import {InnerBlocks, useBlockProps} from "@wordpress/block-editor";

export default function Save({attributes}) {
    return (
        <div {...useBlockProps.save()}>
            <div className="millan-dev-highlight-inner">
                <InnerBlocks.Content/>
            </div>
        </div>
    );
}
