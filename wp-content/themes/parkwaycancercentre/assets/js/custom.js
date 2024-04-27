import Alpine from "alpinejs";

Alpine.data("notification", () => ({
	visible: true,
	message: "",

	send() {
		this.visible = true;
	},

	dismiss() {
		this.visible = false;
	},
}));

window.Alpine = Alpine;
Alpine.start();
