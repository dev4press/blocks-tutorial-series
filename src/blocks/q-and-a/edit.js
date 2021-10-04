/*
 Edit function for the block.
 */
import {__} from '@wordpress/i18n';
import {useBlockProps} from "@wordpress/block-editor";
import {RichText} from '@wordpress/editor';

/*
 Include SASS file with editor styling only for the block.
 This will be compiled into file loaded only inside the editor.
 If you don't have dedicated styling file for the block, remove this.
 */
import './editor.scss';

export default function Edit({attributes, setAttributes}) {
    return (
        <div {...useBlockProps()}>
            <div className="millan-dev-q-and-a-inner">
                <RichText
                    tagName="p"
                    className="question"
                    placeholder={__('Enter the Question...', 'blocks-tutorial-series')}
                    value={attributes.question}
                    onChange={(value) => setAttributes({question: value})}
                />
                <div className="millan-dev-q-and-a-content">
                    <RichText
                        tagName="p"
                        className="answer"
                        placeholder={__('Enter the Answer...', 'blocks-tutorial-series')}
                        value={attributes.answer}
                        onChange={(value) => setAttributes({answer: value})}
                    />
                </div>
            </div>
        </div>
    );
}
