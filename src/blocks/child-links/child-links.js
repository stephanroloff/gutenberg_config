import "../../index.scss";
import { registerBlockType } from "@wordpress/blocks";
import ServerSideRender from "@wordpress/server-side-render";

registerBlockType("ourplugin/child-links", {
  title: "Child Links",
  icon: "admin-links",
  category: "common",
  edit: function () {
    return (
      <div className="child-links-block">
        <ServerSideRender
          block="ourplugin/child-links"
          attributes={{
            showPostCounts: true,
            displayAsDropdown: false,
          }}
        />
      </div>
    );
  },
  save: function () {
    return null;
  },
});
