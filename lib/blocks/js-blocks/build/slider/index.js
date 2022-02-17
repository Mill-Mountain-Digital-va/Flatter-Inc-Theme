/**
 * Internal dependencies
 */
import edit from "./edit";
import save from "./save";
import icon from "./icon";
import metadata from "./block.json";


/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";

/**
 * Block Registration
 */
const { name, category, attributes } = metadata;

registerBlockType(name, {
    title: __("Tab"),
    description: __("Tab container to hold various content."),
    keywords: [__("container")],
    icon: icon,
    parent: ["millmountain/tabs"],
    category,
    attributes,
    edit,
    save,
    parent: ["millmountain/tabs"]
});
