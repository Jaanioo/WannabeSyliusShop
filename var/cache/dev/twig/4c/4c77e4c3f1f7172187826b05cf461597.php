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

/* @SyliusAdmin/CatalogPromotion/Show/_content.html.twig */
class __TwigTemplate_f7ea471f79616f72e1b2a311599de81b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/CatalogPromotion/Show/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/CatalogPromotion/Show/_content.html.twig"));

        // line 1
        echo "<div class=\"ui stackable grid\">
    <div class=\"eight wide column\">
        <h4 class=\"ui top attached large header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</h4>
        ";
        // line 4
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.catalog_promotion.show.content.left_bar", $context);
        echo "
    </div>

    <div class=\"eight wide column\">
        ";
        // line 8
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.catalog_promotion.show.content.right_bar", $context);
        echo "
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/CatalogPromotion/Show/_content.html.twig";
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
        return array (  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui stackable grid\">
    <div class=\"eight wide column\">
        <h4 class=\"ui top attached large header\">{{ 'sylius.ui.details'|trans }}</h4>
        {{ sylius_template_event('sylius.admin.catalog_promotion.show.content.left_bar', _context) }}
    </div>

    <div class=\"eight wide column\">
        {{ sylius_template_event('sylius.admin.catalog_promotion.show.content.right_bar', _context) }}
    </div>
</div>
", "@SyliusAdmin/CatalogPromotion/Show/_content.html.twig", "/Users/janek/Desktop/Programowanie/SyliusShopTrial/SyliusTrailShop/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/CatalogPromotion/Show/_content.html.twig");
    }
}