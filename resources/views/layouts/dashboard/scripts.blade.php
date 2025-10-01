	<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/dashboard/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/dashboard/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('assets/dashboard/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{asset('assets/dashboard/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/dashboard/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/dashboard/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/dashboard/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/dashboard/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assets/dashboard/js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>