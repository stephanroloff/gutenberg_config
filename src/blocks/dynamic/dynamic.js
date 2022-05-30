import "../../index.scss";
import { registerBlockType } from "@wordpress/blocks";

registerBlockType("ourplugin/dynamic", {
  title: "Dynamic Block",
  icon: "smiley",
  category: "common",
  edit: function () {
    return <h3 className="text-h3">This is a DINAMIC BLOCK in the Editor!</h3>;
  },
  save: function () {
    return null;
  },
});
