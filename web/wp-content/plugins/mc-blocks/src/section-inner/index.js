const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {RichText, InnerBlocks} = wp.editor;

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
        }
    },

    edit: props => {
        const {
            attributes: {sectionHeading, sectionContent},
            setAttributes
        } = props;

        const onChangeSectionHeading = newSectionHeading => {
            setAttributes({sectionHeading: newSectionHeading});
        };

        const onChangeSectionContent = newSectionContent => {
            setAttributes({sectionContent: newSectionContent});
        };

        return (
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
        );
    },
    save: props => {
        const {
            attributes: {sectionHeading, sectionContent}
        } = props;

        return (
            <div className="py-8">
                <h2 className="section-heading">
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
        )
    }
});
