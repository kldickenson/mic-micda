const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { RichText } = wp.editor;

import { ReactComponent as Logo } from "../bv-logo.svg";
import logoWhiteURL from "../bv-logo-white.svg";

registerBlockType("podkit/editable", {
  title: __("Custom Title", "podkit"),
  icon: { src: Logo },
  category: "podkit",
  attributes: {
    epsiodeTitle: {
      type: "string",
      source: "html",
      selector: ".podkit-title"
    }
  },

  edit: props => {
    // Props parameter holds all the info.
    console.info(props);

    // Lift info from props and populate various constants.
    const {
      attributes: { epsiodeTitle },
      className,
      setAttributes
    } = props;

    const onChangeEpisodeTitle = newEpisodeTitle => {
      setAttributes({ epsiodeTitle: newEpisodeTitle});
    };

    return (
      <div className={`${className} podkit-block podkit-editable`}>
        <figure className="podkit-logo">
          <img src={logoWhiteURL} alt="logo" />
        </figure>
        <div className="podkit-info">
          <div className="podkit-nameplate">
            {__("The Binaryville Podcast", "podkit")}
          </div>
          <h3 className="podkit-title">
            <RichText 
              placeholder={__("Podcast episode title", "podkit")}
              value={epsiodeTitle}
              onChange={onChangeEpisodeTitle}
            />
          </h3>
          <div className="podkit-cta">
            <a href="#">{__("Like & Subscribe!", "podkit")}</a>
          </div>
        </div>
      </div>
    );
  },
  save: props => {
    const {
      attributes: { epsiodeTitle }
    } = props;

    return (
      <div className="podkit-block podkit-static">
        <figure className="podkit-logo">
          <img src={logoWhiteURL} alt="logo" />
        </figure>
        <div className="podkit-info">
          <div className="podkit-nameplate">
            {__("The Binaryville Podcast", "podkit")}
          </div>
          <h3 className="podkit-title">
            <RichText.Content value={epsiodeTitle} />
          </h3>
          <div className="podkit-cta">
            <a href="/subscribe">{__("Like & Subscribe!", "podkit")}</a>
          </div>
        </div>
      </div>
    );
  }
});
