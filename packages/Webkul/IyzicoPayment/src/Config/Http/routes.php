Providers/IyzicoPaymentServiceProvider.phppublic function boot()
{
 include __DIR__ . '/../Http/routes.php'; $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'iyzico');
}