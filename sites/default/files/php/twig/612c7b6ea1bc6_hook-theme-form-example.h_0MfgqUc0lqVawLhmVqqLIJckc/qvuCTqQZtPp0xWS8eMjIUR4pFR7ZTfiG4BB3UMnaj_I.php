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

/* modules/custom/dummy/templates/hook-theme-form-example.html.twig */
class __TwigTemplate_c94a831a8cfa7e43938f58e88ae7208e45ee0b850c64ef2c64cad3899eb09ea0 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_build_id", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_token", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "
";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_id", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "

<div class=\"description\">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisi nisi, vehicula quis massa at, fermentum tempor risus. Phasellus consequat vel neque vel euismod. Curabitur tellus leo, commodo at nibh sed, euismod mattis orci. Nam in semper ante. Vestibulum pellentesque vitae nibh vel sollicitudin. Aliquam efficitur tortor arcu, eu dignissim urna venenatis nec. Donec ullamcorper et nibh eget scelerisque. Aenean non nunc tempus, congue turpis congue, scelerisque metus. Nulla rutrum egestas sapien. Cras vel suscipit sapien. Donec at est non ligula venenatis blandit. Donec non tortor eu elit consectetur semper luctus ut erat. Morbi et facilisis dui. Aenean est dolor, porttitor pretium convallis vel, feugiat vel neque.
</div>

<div class=\"form-elements\">
  <div class=\"left\">
    <div class=\"row\">
      <div class=\"title\">Tour length</div>
      <div class=\"elements\">
        ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tour_length", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"title\">My Travel Party</div>
      <div class=\"elements three-in-row\">
        ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adults", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
        ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kids", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
        ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "infants", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"title\">Arrival and departure date</div>
      <div class=\"elements two-in-row\">
        ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "arrival_date", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
        ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "departure_date", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"title\">Arrival and departure city</div>
      <div class=\"elements two-in-row\">
        ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "arrival_city", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "
        ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "departure_city", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>

  <div class=\"right\">
    <div class=\"row\">
      <div class=\"title\">Cars & Hotels options</div>
      <div class=\"elements two-in-row\">
        ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "car", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
        ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hotel", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"title\">My interests</div>
      <div class=\"elements\">
        ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "my_interests", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"title\">My Contact Details</div>
      <div class=\"elements\">
        <div class=\"information two-in-row\">
          ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
          ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
          ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
          ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
        </div>

        ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"buttons\">
  ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/dummy/templates/hook-theme-form-example.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 77,  162 => 70,  156 => 67,  152 => 66,  148 => 65,  144 => 64,  133 => 56,  123 => 49,  119 => 48,  107 => 39,  103 => 38,  93 => 31,  89 => 30,  79 => 23,  75 => 22,  71 => 21,  61 => 14,  47 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/dummy/templates/hook-theme-form-example.html.twig", "/var/www/drupal/web/modules/custom/dummy/templates/hook-theme-form-example.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
