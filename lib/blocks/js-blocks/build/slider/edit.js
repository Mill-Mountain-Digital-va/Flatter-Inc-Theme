/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import { PanelBody, PanelRow } from "@wordpress/components";
import {
    RichText,
    InnerBlocks,
    InspectorControls
} from "@wordpress/block-editor";
import { useInstanceId } from "@wordpress/compose";

/**
 * External dependencies
 */
import classnames from "classnames";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";

const ALLOWED_BLOCKS = commonSettings.flowBlocks;

/**
 * Edit Function
 */
export default function TabEdit({
    attributes,
    setAttributes,
    className,
    context,
    clientId
}) {
    const { title, icon, id } = attributes;

    const instanceId = useInstanceId(TabEdit);

    setAttributes({ id: instanceId });

    const classBlockName = "millmountain-c-tabs__panel";

    let classes = {
        [`${classBlockName}`]: true,
        [`${classBlockName}--edit`]: true,
        className: className
    };

    return (
        <div className={classnames(classes)}>
            <InspectorControls>
                {context.hasOwnProperty("millmountain/tab-variant") &&
                    (context["millmoutain/tab-variant"] + "").includes("cards") ? (
                    <PanelBody title="Style Options">
                        <PanelRow>
                            <IconTextControl
                                uniqueId="tab-icon"
                                label="Icon"
                                value={icon}
                                onChange={icon => {
                                    setAttributes({ icon });
                                }}
                            />
                            <FontAwesomeIcon icon={["far", icon]} size="2x" fixedWidth />
                        </PanelRow>
                    </PanelBody>
                ) : null}
            </InspectorControls>
            <RichText
                tagName="div"
                className={`${classBlockName}-label`}
                onChange={title => {
                    setAttributes({ title });
                }}
                value={title}
                placeholder="Tab title"
            />
            <InnerBlocks allowedBlocks={ALLOWED_BLOCKS} templateLock={false} />
        </div>
    );
}
