import "../../index.scss";
import { registerBlockType } from "@wordpress/blocks";
import ServerSideRender from "@wordpress/server-side-render";

registerBlockType("ourplugin/child-page-link", {
  title: "Child Page Link",
  icon: "admin-links",
  category: "common",
  edit: function () {
    return (
      <div className="child-page-link-block2">
        <ServerSideRender
          block="ourplugin/child-page-link"
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
