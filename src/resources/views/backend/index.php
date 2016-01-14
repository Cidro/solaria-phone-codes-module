<script>
    //TODO: cambiar esto a auna llamada por ajax, es mas menos feo
    var contents = <?=json_encode(['phoneCodesCountries' => $phoneCodesCountries->toArray(), 'phoneCodesCities' => $phoneCodesCities->toArray()]);?>;
</script>
<div class="row" ng-controller="PhoneCodesModuleController" ng-init="init()">
</div>