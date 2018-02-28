<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7e86d90b9cffba097ce5f47e2dfffcdb3a89920b0513ebab398fa838c7731f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c60691857a49ac70081b074cf906d285d26f730ee63f776d6088aa41235c49e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60691857a49ac70081b074cf906d285d26f730ee63f776d6088aa41235c49e3->enter($__internal_c60691857a49ac70081b074cf906d285d26f730ee63f776d6088aa41235c49e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_357d4aed42533650e827af560fc26231c65c4e890be32d3d4a8b532f30f92c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357d4aed42533650e827af560fc26231c65c4e890be32d3d4a8b532f30f92c4c->enter($__internal_357d4aed42533650e827af560fc26231c65c4e890be32d3d4a8b532f30f92c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c60691857a49ac70081b074cf906d285d26f730ee63f776d6088aa41235c49e3->leave($__internal_c60691857a49ac70081b074cf906d285d26f730ee63f776d6088aa41235c49e3_prof);

        
        $__internal_357d4aed42533650e827af560fc26231c65c4e890be32d3d4a8b532f30f92c4c->leave($__internal_357d4aed42533650e827af560fc26231c65c4e890be32d3d4a8b532f30f92c4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
