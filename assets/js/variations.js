// NOTE: Variations for 'core/group' blocks created here, add new variations in this section as needed.

wp.domReady(function() {
    /**
     * A Group block variation with box shadow, border, and padding.
     */
    wp.blocks.registerBlockVariation('core/group', {
        name: 'group-shadow-solid',
        title: 'Group - Shadow Solid',
        description: 'A group with a solid shadow',
        isDefault: false,
        attributes: {
            className: 'is-style-shadow-solid',
            style: {
                border: {
                    width: "1px"
                },
                spacing: {
                    padding: {
                        top: "var:preset|spacing|x-small",
                        right: "var:preset|spacing|x-small",
                        bottom: "var:preset|spacing|x-small",
                        left: "var:preset|spacing|x-small"
                    }
                }
            },
            borderColor: "contrast"
        },
    })

    const logStyles = 'background: #3b82f6; color: white; font-weight: bold; padding: 1rem; font-size: 1rem';

    console.info('%cBlock variation "Group - Shadow Solid" registered successfully.', logStyles);
})
