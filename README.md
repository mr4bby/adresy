# Adresy – Modal Address Finder for WooCommerce

Adresy is a modern, user-friendly address selection plugin for WooCommerce, designed to streamline the checkout experience and improve address accuracy for your customers. With its intuitive modal interface, Adresy enables fast location selection, supports both desktop and mobile views, and integrates seamlessly with WooCommerce’s shipping system.

## Features

### 1. Modal-Based Address Selection

Adresy introduces a modal dialog for address selection, allowing users to choose their delivery location without leaving the current page. The modal is available in both desktop and mobile-optimized versions, ensuring a consistent experience across devices.

- **Desktop Modal:** Triggered via `[adresy_location_trigger_desktop]` shortcode.
- **Mobile Modal:** Triggered via `[adresy_location_trigger_mobile]` shortcode.
- **Customizable Appearance:** Easily adjust colors, fonts, and styles via the admin settings.

### 2. Country and City Selection

Users can select their country and city from searchable dropdowns powered by Select2, or choose from a list of allowed countries and regions. The plugin supports WooCommerce’s country and state configuration, ensuring compatibility with your store’s shipping zones.

- **Country List:** Dynamically generated based on WooCommerce settings.
- **City/State Selection:** Integrated with WooCommerce’s state/city data for accurate shipping calculations.
- **Outside Shipping Option:** Users can opt to ship outside the default country, with clear UI separation.

### 3. Geolocation Support

Adresy can detect the user’s current location using the browser’s geolocation API, making it easy for customers to autofill their address details. The plugin supports multiple geocoding APIs, configurable from the admin panel.

- **Geocoding API Options:** Choose from Open Cage or other supported providers.
- **API Key Management:** Enter and manage your geocoding API keys directly in the settings.

### 4. WooCommerce Integration

Adresy updates WooCommerce’s shipping address fields in real-time, ensuring that the selected location is used for shipping calculations, taxes, and order fulfillment.

- **User Meta Updates:** Shipping country, state, and city are saved to user meta.
- **AJAX-Powered:** All address changes are handled via AJAX for a smooth, reload-free experience.
- **Shipping Address Management:** Users can manage their shipping address via a direct link to the WooCommerce My Account page.

### 5. Admin Settings

The plugin includes a comprehensive settings page in the WordPress admin area, allowing you to customize the modal’s appearance and behavior.

- **Color Customization:** Set button and text colors for the modal.
- **Mode Selection:** Choose between dark and light modes for desktop and mobile.
- **Geocoding API Configuration:** Select your preferred geocoding provider and enter API keys.
- **Documentation & Support Links:** Quick access to plugin documentation and support resources.

### 6. Responsive Design

Adresy is fully responsive, with separate stylesheets for desktop and mobile (`modal-style.css` and `modal-style-smallsc.css`). The modal adapts to different screen sizes, ensuring usability on smartphones, tablets, and desktops.

- **Mobile-First UI:** Optimized for touch interactions and small screens.
- **RTL Support:** Compatible with right-to-left languages.

## Installation

1. Upload the `adresy` folder to your WordPress plugins directory (`wp-content/plugins/`).
2. Activate the plugin via the WordPress admin dashboard.
3. Configure the plugin settings under **Adresy Settings** in the admin menu.
4. Add the appropriate shortcode to your site:
   - Desktop: `[adresy_location_trigger_desktop]`
   - Mobile: `[adresy_location_trigger_mobile]`

## Usage

Once installed and configured, Adresy will display a modal address selector on your site. Customers can choose their delivery location, which will be saved to their WooCommerce profile and used for shipping calculations.

- **Selecting a Location:** Click the address trigger to open the modal, select your country and city, and apply the changes.
- **Managing Address:** Use the “Manage address” link to edit your shipping address in WooCommerce.
- **Geolocation:** Click the location icon to autofill your address using your device’s location.

## File Structure

- `adresy.php`: Main plugin file.
- `assets/`: Contains CSS, JS, fonts, and images.
- `includes/`: Core PHP classes (AJAX, shortcodes, modal logic, updater).
- `template/`: Modal templates for desktop and mobile.
- `README.md`: This documentation file.

## Support & Documentation

For detailed documentation, troubleshooting, and support, please visit:

- [Adresy Documentation](https://adresy.net/docs)
- [Adresy Support](https://adresy.net/support)

## License & Copyright

Adresy is distributed under the GNU General Public License v2.0 or later. This means you are free to use, modify, and distribute this plugin, provided that any derivative works are also licensed under the GPL. For full license details, see [GPL v2.0](https://www.gnu.org/licenses/gpl-2.0.html).

All code, images, and assets included in this plugin are the intellectual property of the Adresy development team unless otherwise stated. Unauthorized copying, reproduction, or redistribution of any part of this plugin outside the terms of the GPL license is strictly prohibited.

Adresy and its logo are trademarks of the Adresy Team. All other trademarks are the property of their respective owners.

For commercial licensing, partnership inquiries, or questions regarding copyright, please contact us via our [support page](https://adresy.net/support)