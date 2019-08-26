import React from "react";

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {RichText, InnerBlocks, InspectorControls, MediaUpload} = wp.editor;
const {PanelBody, Button} = wp.components;

registerBlockType("mc-blocks/section-inner", {
    title: __("Section with Inner Blocks", "mc-blocks"),
    icon: "feedback",
    category: "widgets",

    attributes: {
        sectionHeading: {
            type: "string",
            source: "html",
            selector: ".section-heading"
        },
        sectionContent: {
            type: "array",
            source: "children",
            selector: ".section-content"
        },
        sectionBackgroundImage: {
            type: "string",
            source: "attribute",
            selector: ".section-background",
            attribute: "data-src"
        }
    },

    styles: [
        {
            name: "default",
            label: __("Standard", "mc-blocks"),
            isDefault: true
        },
        {
            name: "stacked",
            label: __("Stacked", "mc-blocks")
        }
    ],

    edit: props => {
        const {
            attributes: {sectionHeading, sectionContent, sectionBackgroundImage},
            setAttributes
        } = props;

        const onChangeSectionHeading = newSectionHeading => {
            setAttributes({sectionHeading: newSectionHeading});
        };

        const onChangeSectionContent = newSectionContent => {
            setAttributes({sectionContent: newSectionContent});
        };

        const onImageSelect = newImage => {
            setAttributes({sectionBackgroundImage: newImage.sizes.full.url});
        };

        return [
            <InspectorControls>
                <PanelBody title={__("Background image", "mc-blocks")}>
                    <img src={sectionBackgroundImage} alt=""/>
                    <MediaUpload
                        onSelect={onImageSelect}
                        value={sectionBackgroundImage}
                        render={({open}) => (
                            <Button onClick={open}>Change image</Button>
                        )}
                    />
                </PanelBody>
            </InspectorControls>,
            <div>
                <h3 className="section-heading">
                    <RichText
                        placeholder={__("Section heading", "mc-blocks")}
                        value={sectionHeading}
                        onChange={onChangeSectionHeading}
                    />
                </h3>
                <div className="section-content">
                    <RichText
                        multiline="p"
                        placeholder={__("Section content", "mc-blocks")}
                        onChange={onChangeSectionContent}
                        value={sectionContent}
                    />
                </div>
                {/* InnerBlocks will throw an error when trying to render a styles preview.
                    Following conditional will not render a preview and not throw an error.
                    Found the fix here: https://github.com/WordPress/gutenberg/issues/9897
                 */}
                {typeof props.insertBlocksAfter !== "undefined" ?
                    <InnerBlocks allowedBlocks={["core/table", "mc-blocks/card", "core/paragraph"]}/>:<div />
                }
            </div>
        ];
    },
    save: props => {
        const {
            attributes: {sectionHeading, sectionContent, sectionBackgroundImage}
        } = props;

        return (
            <div className="py-16 section-background full-width" data-src={sectionBackgroundImage}
                 style={sectionBackgroundImage ? `background: url(${sectionBackgroundImage}) no-repeat center/cover` : ""}>

                <div className="contained">
                    <h2 className="section-heading text-michigan-blue">
                        <RichText.Content
                            value={sectionHeading}
                        />
                    </h2>
                    <div className="flex">
                        <div className="section-content mr-12 w-1/4">
                            <RichText.Content
                                multiline="p"
                                value={sectionContent}
                            />
                        </div>
                        <div className="inner-blocks flex w-3/4 flex-grow">
                            <InnerBlocks.Content/>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
});
