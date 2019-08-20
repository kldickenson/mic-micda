const {__} = wp.i18n;
const {registerBlockType} = wp.blocks;
const {RichText} = wp.editor;

registerBlockType("mc-blocks/card", {
    title: __("Card", "mc-blocks"),
    icon: "id",
    category: "widgets",

    attributes: {
        cardHeading: {
            type: "string",
            source: "text",
            selector: ".card-heading"
        },
        cardTopContent: {
            type: "string",
            source: "html",
            selector: ".card-top-content"
        },
        cardBottomContent: {
            type: "string",
            source: "html",
            selector: ".card-bottom-content"
        }
    },

    edit: props => {
        const {
            attributes: {cardHeading, cardTopContent, cardBottomContent},
            setAttributes
        } = props;

        const onChangeCardHeading = newCardHeading => {
            setAttributes({cardHeading: newCardHeading});
        };

        const onChangeCardTopContent = newCardTopContent => {
            setAttributes({cardTopContent: newCardTopContent});
        };

        const onChangeCardBottomContent = newCardBottomContent => {
            setAttributes({cardBottomContent: newCardBottomContent});
        };

        return (
            <div>
                <h3 className="card-heading">
                    <RichText
                        placeholder={__("Card heading", "mc-blocks")}
                        value={cardHeading}
                        onChange={onChangeCardHeading}
                    />
                </h3>
                <div className="card-top-content">
                    <RichText
                        placeholder={__("Card top content", "mc-blocks")}
                        onChange={onChangeCardTopContent}
                        value={cardTopContent}
                    />
                </div>
                <div className="card-bottom-content">
                    <RichText
                        placeholder={__("Card bottom content", "mc-blocks")}
                        onChange={onChangeCardBottomContent}
                        value={cardBottomContent}
                    />
                </div>
            </div>
        );
    },
    save: props => {
        const {
            attributes: {accordionHeading, accordionContent}
        } = props;

        return (
            <div>hello</div>
        )
    }
});
