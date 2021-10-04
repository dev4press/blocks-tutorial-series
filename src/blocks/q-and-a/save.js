/*
 Edit function for the block.
 */
import {useBlockProps} from "@wordpress/block-editor";
import {RichText} from '@wordpress/editor';

export default function Save({attributes}) {
    return (
        <div {...useBlockProps.save()}>
            <div className="millan-dev-q-and-a-inner" itemScope itemProp="mainEntity" itemType="https://schema.org/Question">
                <p itemProp="name" className="question">
                    <RichText.Content value={attributes.question}/>
                </p>
                <div className="millan-dev-q-and-a-content" itemScope itemProp="acceptedAnswer" itemType="https://schema.org/Answer">
                    <p className="answer" itemProp="text">
                        <RichText.Content value={attributes.answer}/>
                    </p>
                </div>
            </div>
        </div>
    );
}
