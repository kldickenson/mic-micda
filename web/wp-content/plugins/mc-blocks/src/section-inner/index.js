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
                <InnerBlocks
                    allowedBlocks={["core/table"]}
                />
            </div>
        ];
    },
    save: props => {
        const {
            attributes: {sectionHeading, sectionContent, sectionBackgroundImage}
        } = props;

        return (
            <div className="py-16 section-background full-width" data-src={sectionBackgroundImage}
                 style={sectionBackgroundImage ? `background-image: url(${sectionBackgroundImage})` : ""}>

                <div className="contained">
                    <h2 className="section-heading text-michigan-blue">
                        <RichText.Content
                            value={sectionHeading}
                        />
                    </h2>
                    <div className="flex">
                        <div className="section-content mr-12 max-w-15">
                            <RichText.Content
                                multiline="p"
                                value={sectionContent}
                            />
                        </div>
                        <InnerBlocks.Content/>
                    </div>
                </div>
            </div>
        )
    }
});
