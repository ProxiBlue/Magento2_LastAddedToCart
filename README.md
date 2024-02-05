This is an example module that show how to inject last cart added item to checkout session, (via observer event) and then inject that data to the cart sectionData.
This can then be used in a Hyva site to find last added cart item listenting to event 'private-content-loaded'

Ref: https://gitlab.hyva.io/hyva-themes/magento2-theme-module/-/blob/main/src/view/frontend/templates/page/js/private-content.phtml?ref_type=heads#L125

** This code is largely untested and put together in a rush as an example **

The end result is the data injected to the sectionData

![image](https://github.com/ProxiBlue/Magento2_LastAddedToCart/assets/4994260/cd518190-abda-4c5b-83b1-1ffad21b8290)
