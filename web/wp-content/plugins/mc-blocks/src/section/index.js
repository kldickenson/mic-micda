import React from "react";

const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {RichText, InnerBlocks, InspectorControls, MediaUpload, URLInputButton} = wp.editor;
const {PanelBody, Button} = wp.components;

registerBlockType("mc-blocks/section", {
    title: __("Section", "mc-blocks"),
    icon: "feedback",
    category: "widgets",

    attributes: {
        sectionHeading: {
            type: "string",
            source: "html",
            selector: ".section-heading"
        },
        sectionContent: {
            type: "string",
            source: "html",
            multiline: "p",
            selector: ".section-content"
        },
        sectionList: {
            type: "string",
            source: "html",
            multiline: "li",
            selector: ".section-list"
        },
        sectionBackgroundImage: {
            type: "string",
        },
        sectionCtaText: {
            type: "string",
            source: "text",
            selector: ".section-cta"
        },
        sectionCtaUrl: {
            type: "string",
            source: "attribute",
            selector: ".section-cta",
            attribute: "href"
        }
    },

    edit: props => {
        const {
            attributes: {sectionHeading, sectionContent, sectionBackgroundImage, sectionCtaUrl, sectionCtaText, sectionList},
            setAttributes
        } = props;

        const onChangeSectionHeading = newSectionHeading => {
            setAttributes({sectionHeading: newSectionHeading});
        };

        const onChangeSectionContent = newSectionContent => {
            setAttributes({sectionContent: newSectionContent});
        };

        const onBackgroundImageSelect = newBackgroundImage => {
            setAttributes({sectionBackgroundImage: newBackgroundImage.sizes.full.url});
        };

        const onChangeSectionCtaUrl = newSectionCtaUrl => {
            setAttributes({sectionCtaUrl: newSectionCtaUrl});
        };

        const onChangeSectionCtaText = newSectionCtaText => {
            setAttributes({sectionCtaText: newSectionCtaText});
        };

        const onChangeSectionList = newSectionList => {
            setAttributes({sectionList: newSectionList});
        };

        return [
            <InspectorControls>
                <PanelBody title={__("Background image", "mc-blocks")}>
                    <img src={sectionBackgroundImage} alt=""/>
                    <MediaUpload
                        onSelect={onBackgroundImageSelect}
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
                        formattingControls={[]}
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
                <RichText
                    tagName="ul"
                    multiline="li"
                    className="section-list"
                    placeholder={__("List items", "mc-blocks")}
                    onChange={onChangeSectionList}
                    value={sectionList}
                />
                <RichText
                    placeholder={__("CTA button text", "mc-blocks")}
                    value={sectionCtaText}
                    onChange={onChangeSectionCtaText}
                />
                <URLInputButton
                    className="section-cta-url"
                    label={__("CTA URL", "mc-blocks")}
                    onChange={onChangeSectionCtaUrl}
                    url={sectionCtaUrl}
                />
            </div>
        ];
    },
    save: props => {
        const {
            attributes: {sectionHeading, sectionContent, sectionBackgroundImage, sectionCtaUrl, sectionCtaText, sectionList}
        } = props;

        return (
            <div className="py-16 section-background full-width"
                 style={sectionBackgroundImage ? `background: url(${sectionBackgroundImage}) no-repeat center/cover` : ""}>

                <div className="section-wrapper contained flex">
                    <div className="section-text w-1/2">
                        <h2 className="section-heading">
                            <RichText.Content
                                value={sectionHeading}
                            />
                        </h2>
                        <div className="section-content">
                            <RichText.Content
                                multiline="p"
                                value={sectionContent}
                            />
                        </div>
                        <ul className="section-list">
                            <RichText.Content
                                multiline="li"
                                value={sectionList}
                            />
                        </ul>
                        {sectionCtaUrl &&
                        <a className="section-cta button" href={sectionCtaUrl}>
                            <RichText.Content
                                value={sectionCtaText}
                            />
                        </a>
                        }
                    </div>
                </div>
            </div>
        )
    }
});
