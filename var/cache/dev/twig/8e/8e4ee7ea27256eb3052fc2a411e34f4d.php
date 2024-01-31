<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SyliusAdmin/Crud/Update/_breadcrumb.html.twig */
class __TwigTemplate_9ba86a7476bca2f277d32b93d9b24d6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig"));

        // line 1
        $macros["breadcrumb"] = $this->macros["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["index_url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 4), "index", [], "any", false, true, false, 4), "route", [], "any", false, true, false, 4), "name", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 4), "index", [], "any", false, true, false, 4), "route", [], "any", false, true, false, 4), "name", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 4, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 4))) : (twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 4, $this->source); })()), "getRouteName", ["index"], "method", false, false, false, 4))), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "index", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "index", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", false, false, false, 5), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", false, false, false, 5), [])) : ([])))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 5), "route", [], "any", false, true, false, 5), "parameters", [], "any", false, false, false, 5), [])) : ([])))));
        // line 8
        echo "
";
        // line 9
        $context["breadcrumb"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 9), "breadcrumb", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "vars", [], "any", false, true, false, 9), "breadcrumb", [], "any", false, false, false, 9), ((twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 9, $this->source); })()), "applicationName", [], "any", false, false, false, 9) . ".ui.") . twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 9, $this->source); })()), "pluralName", [], "any", false, false, false, 9)))) : (((twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 9, $this->source); })()), "applicationName", [], "any", false, false, false, 9) . ".ui.") . twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 9, $this->source); })()), "pluralName", [], "any", false, false, false, 9))));
        // line 10
        echo "
";
        // line 11
        $context["breadcrumbs"] = [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 13
(isset($context["breadcrumb"]) || array_key_exists("breadcrumb", $context) ? $context["breadcrumb"] : (function () { throw new RuntimeError('Variable "breadcrumb" does not exist.', 13, $this->source); })())), "url" => (isset($context["index_url"]) || array_key_exists("index_url", $context) ? $context["index_url"] : (function () { throw new RuntimeError('Variable "index_url" does not exist.', 13, $this->source); })())], ["label" => ((twig_get_attribute($this->env, $this->source,         // line 14
($context["resource"] ?? null), "name", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "name", [], "any", false, false, false, 14), ((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14))) : (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14))))) : (((twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["resource"] ?? null), "code", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14))) : (twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)))))], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit")]];
        // line 18
        echo "
";
        // line 19
        echo twig_call_macro($macros["breadcrumb"], "macro_crumble", [(isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  67 => 19,  64 => 18,  62 => 14,  61 => 13,  60 => 11,  57 => 10,  55 => 9,  52 => 8,  50 => 5,  49 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set index_url = path(
        configuration.vars.index.route.name|default(configuration.getRouteName('index')),
        configuration.vars.index.route.parameters|default(configuration.vars.route.parameters|default({}))
    )
%}

{% set breadcrumb = configuration.vars.breadcrumb|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: breadcrumb|trans, url: index_url },
        { label: resource.name|default(resource.code|default(resource.id)) },
        { label: 'sylius.ui.edit'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Update/_breadcrumb.html.twig");
    }
}
